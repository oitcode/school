<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoDeleteConfirm extends Component
{
    public $deletingTodo;

    public function render()
    {
        return view('livewire.todo-delete-confirm');
    }
}
