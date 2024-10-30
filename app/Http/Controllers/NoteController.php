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

        //view('note.show', ['note' => $note])     'note' nosaukums skatā(view)
    }
    public function edit(Note $note)
    {
        return view('note.edit', ['note' => $note]);

        //view('note.show', ['note' => $note])     'note' nosaukums skatā(view)
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
    public function update(Request $request, Note $note)
    {
        // \Log::debug($request);

        $data = [
            'title' => $request->title,
        ];
        $note->update($data);
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/note');
        // return view('Note deelete');
    }
}
