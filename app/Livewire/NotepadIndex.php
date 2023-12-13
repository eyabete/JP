<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class NotepadIndex extends Component
{
    public $newNote = '';
    public $notes;
    public $editingNoteId = null;

    protected $rules = [
        'newNote' => 'required|string',
    ];

    public function render()
    {
        $user = Auth::user();
        $this->notes = $user ? $user->notes()->latest()->get() : [];

        return view('livewire.notepad-index');
    }

    public function addNote()
    {
        $this->validate();

        $user = Auth::user();

        if ($user) {
            $user->notes()->create([
                'content' => $this->newNote,
            ]);

            $this->newNote = ''; // Clear the input field after adding a note
            $this->selectNotes(); // Refresh the notes list
        }
    }

    public function editNote($noteId)
    {
        $this->editingNoteId = $noteId;
        $note = $this->notes->find($noteId);

        if ($note) {
            $this->newNote = $note->content; // Set the initial content when editing
        }
    }

    public function saveNote($noteId)
    {
        $this->validate();

        $user = Auth::user();
        $note = $user->notes()->find($noteId);

        if ($note) {
            $note->update([
                'content' => $note->content . $this->newNote, // Append new content
            ]);

            $this->editingNoteId = null; // Reset the editing state
            $this->selectNotes(); // Refresh the notes list
        }
    }

    public function cancelEdit()
    {
        $this->editingNoteId = null; // Reset the editing state
    }

    public function deleteNote($noteId)
    {
        $user = Auth::user();

        $note = $user->notes()->find($noteId);

        if ($note) {
            $note->delete();
            $this->selectNotes(); // Refresh the notes list
        }
    }

    public function selectNotes()
    {
        // Retrieve only notes that belong to the authenticated user
        $user = Auth::user();
        $this->notes = $user->notes()->orderBy('created_at', 'DESC')->get();
    }
}