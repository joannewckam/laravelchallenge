<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesApiController extends Controller
{
    public function show(){
        if($user->is(auth()->user())){
            return Storage::download('notes/' . $user->id . 'notes.pdf'); 
        }
        abort(401);
    }

    public function store(Request $request){
        $request->validate([
            'note' =>'file|mimetypes:application/pdf|max:4000'
        ]);
        $request->file('note')->store('notes/' . auth()->user()->id . '/note.pdf');

        return back()->with('message', 'Note uploaded successfully');
    }
}