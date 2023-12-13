<?php

namespace App\Livewire;

use App\Models\TodoItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class TaskIndex extends Component
{
    public $todos;
    public string $todoText = '';

    public function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.task-index');
    }

    public function addTodo()
    {
        $user = Auth::user();

        // Check if the todo text is not empty before creating a new todo
        if (!empty($this->todoText)) {
            $user->todos()->create([
                'todo' => $this->todoText,
                'completed' => false,
            ]);

            $this->todoText = '';
            $this->selectTodos();
        }
    }


    public function toggleTodo($id)
    {
        $user = Auth::user();

        $todo = $user->todos()->find($id);

        if ($todo) {
            $todo->completed = !$todo->completed;
            $todo->save();
        }

        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $user = Auth::user();

        $todo = $user->todos()->find($id);

        if ($todo) {
            $todo->delete();
        }

        $this->selectTodos();
    }

    public function emptyInput()
{
    return empty($this->todoText);
}

    public function selectTodos()
    {
        // Retrieve only tasks that belong to the authenticated user
        $user = Auth::user();
        $this->todos = $user->todos()->orderBy('created_at', 'DESC')->get();
    }
}
