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

    public function test_index_is_rendered(){

        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                         ->withSession(['banned' => false])
                         ->get('/');
        
        $response->assertStatus(200);
    }

    public function validate_formFields_to_post()
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                         ->withSession(['banned' => false])
                         ->post('/note',[
                            'user_id' => auth()->id,
                            'name' => 'name',
                            'file' => 'file',
                         ]);
        $this->assertSuccessful();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
