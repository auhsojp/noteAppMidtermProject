<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    
    public function index(){
        $notes = Note::all();
        return view('index', ['notes' => $notes]);
    }
    public function show(Note $note)
    {
        return view('view', compact('note'));
    }
    public function create(){
        return view('create');
    }
    public function save(Request $request){
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:100',
            'content' => 'required|string|min:1|max:10000'
        ]);

        $newNoteS = Note::create($validatedData);

        return redirect(route('index'));

    }

    public function edit(Note $note){
        return view('edit', ['note' => $note]);
    }

    public function update(Note $note, Request $request){
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:100',
            'content' => 'required|string|min:1|max:10000'
        ]);

        $note->update($validatedData);
        return redirect(route('index'))->with('success', 'Notes Successfully Edited');
    }

    public function delete(Note $note){
        $note->delete();
        return redirect(route('index'))->with('success', 'Notes  Successfully deleted');
    }
}
