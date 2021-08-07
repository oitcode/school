<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Todo;

class TodoComponent extends Component
{
    public $createMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $updatingTodo = null;
    public $deletingTodo = null;

    protected $listeners = [
        'todoAdded' => 'finishCreate',
        'exitCreate' => 'exitCreateMode',
        'updateTodo',
        'exitUpdate' => 'exitUpdateMode',
        'deleteTodo',
        'confirmDeleteTodo',
        'exitDelete' => 'exitDeleteMode',
    ];

    public function render()
    {
        return view('livewire.todo-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updateMode = false;
    }

    public function updateTodo(Todo $todo)
    {
        $this->updatingTodo = $todo;
        $this->enterUpdateMode();
    }

    public function deleteTodo(Todo $todo)
    {
        $todo->delete();
        $this->exitDeleteMode();
        $this->emit('updateList');
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingTodo = null;
        $this->deleteMode = false;
    }

    public function confirmDeleteTodo(Todo $todo)
    {
        $this->enterDeleteMode();
        $this->deletingTodo = $todo;
    }

    public function finishCreate()
    {
        $this->exitCreateMode();
        $this->emit('updateList');
    }
}
