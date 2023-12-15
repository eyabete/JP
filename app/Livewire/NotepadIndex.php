<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class NotepadIndex extends Component
{
    public $newNote = [
        'title' => '',
        'content' => '',
    ];

    public $notes;
    public $editingNoteId = null;

    protected $rules = [
        'newNote.title' => 'required|string',
        'newNote.content' => 'required|string',
    ];

    public function render()
    {
        $this->selectNotes();

        return view('livewire.notepad-index');
    }

    public function addNote()
    {
        $this->validate();

        $user = Auth::user();

        if ($user) {
            $user->notes()->create($this->newNote);

            $this->newNote = [
                'title' => '',
                'content' => '',
            ]; // Clear the input fields after adding a note
            $this->selectNotes(); // Refresh the notes list
        }
    }

    public function editNote($noteId)
    {
        $this->editingNoteId = $noteId;
        $note = $this->notes->find($noteId);

        if ($note) {
            $this->newNote = [
                'title' => $note->title,
                'content' => $note->content,
            ]; // Set the initial title and content when editing
        }
    }

    public function saveNote($noteId)
    {
        $this->validate();

        $user = Auth::user();
        $note = $user->notes()->find($noteId);

        if ($note) {
            if ($this->editingNoteId) {
                // If in edit mode, update the existing note
                $note->update([
                    'title' => $this->newNote['title'],
                    'content' => $this->newNote['content'],
                ]);
            } else {
                // If not in edit mode, create a new note
                $user->notes()->create($this->newNote);
            }

            $this->editingNoteId = null; // Reset the editing state
            $this->newNote = [
                'title' => '',
                'content' => '',
            ]; // Clear the input fields
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

    public function toggleContent($noteId)
    {
        // Toggle the visibility of the content for the specified note
        // You can use the $this->notes property to track the visibility state of each note
        // For example, you can add a 'showContent' attribute to each note in the $this->notes array

        $note = $this->notes->find($noteId);

        if ($note) {
            $note->showContent = !$note->showContent;
        }
    }
}
