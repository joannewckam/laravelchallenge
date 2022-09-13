<?php

namespace App\Http\Controllers;


use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NotesApiController extends Controller
{
    public function index(){
       $notes = Note::all()->where('user_id', auth()->user()->id);
       return view('index')->with('notes', $notes);
    }
    public function upload(){
        return view('upload');
    }
    public function store(Request $request){
            $formFields = $request->validate([
                'name' => 'required',
                'file' => 'required'
            ]);
            if ($request->hasFile('file')){
                $formFields['file'] = $request->file('file')->store('files', 'public');
            }
            $formFields['user_id'] = Auth::user()->id;
            Note::create($formFields);
            return redirect('/');
        }
    }
