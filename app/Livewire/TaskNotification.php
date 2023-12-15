<?php

namespace App\Livewire;

use App\Models\TodoItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskNotification extends Component
{
    public $tasks;

    public function mount()
    {
        // Fetch tasks with a deadline today
        $this->tasks = Auth::user()->todos()->whereDate('deadline', today())->get();
    }

    public function render()
    {
        return view('livewire.task-notification');
    }
}
