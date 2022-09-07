<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesApiController extends Controller
{
    public function index(){
        return Note::all();
    }

    public function store(){
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);
        return Note::create([
            'name' => request('name'),
            'description' => request('description'),
            'file' => request('file'),
        ]);
    }

    public function update(Note $note){
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);
        $success=$note->update([
            'name' => request('name'),
            'description' => request('description'),
            'file' => request('file'),
        ]);
        return [
            'success'=>$success
        ];
    }

    public function destroy(Note $note){
        $success=$note->delete();
        return [
            'success'=> $success
        ];
    }
    
}
