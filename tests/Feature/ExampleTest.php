<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     *  
     * 
     * @return void
     */

    // public function test_interacting_with_the_session(){
    //     $response = $this->withSession(['banned' => false])->get('/')->assertStatus(200);
    // }

    // public function test_user_authentication()
    // {
    //     $user = User::factory()->create();
    //     $response = $this->actingAs($user)->withSession(['banned'=>false])->get('/')->assertStatus(200);
    // }

    public function test_file_upload(){

        Storage::fake('local');
        $user = User::factory()->create();
        $this->actingAs($user);

        Storage::assertMissing('note/' . $user->id . '/note.pdf');

        $this->post(route('users.note.store'), [
            'note' => UploadedFile::fake()->create('hello.pdf', 2000, 'application/pdf')
        ])->assertRedirect();

        Storage::assertExists('note/' . $user->id . '/note.pdf');

        // $this->get(route('users.note.show', $user->id))->assertStatus(200)->assertDownload('note.pdf');
    }
}
