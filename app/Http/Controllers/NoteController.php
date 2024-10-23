<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //
    public function index()
    {
        $notes = Note::all();
        //Iegūsta visus datus
        return view('note.index', ['allNotes' => $notes]);
        //kvadrātiekavā iedot notes
    }
    public function create()
    {
        return view('note.create');
    }

    public function show(Note $note)
    {
        return view('note.show', ['note' => $note]);
    }
    public function store(Request $request)
    {
        // \Log::debug($request);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        Note::create($data);
    }
}
