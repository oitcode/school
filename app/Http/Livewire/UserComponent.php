<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserComponent extends Component
{
    public $createMode;
    public $listMode;

    protected $listeners = [
        'userAdded' => 'ackUserCreated',
        'exitCreateMode',
    ];

    public function render()
    {
        return view('livewire.user-component');
    }

    public function clearModes()
    {
        $this->exitCreateMode();
    }

    public function enterCreateMode()
    {
        $this->clearModes();
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function ackUserCreated()
    {
        $this->exitCreateMode();
        session()->flash('message', 'User created');
    }

    public function enterListMode()
    {
        $this->clearModes();
        $this->listMode = true;
    }

    public function exitListMode()
    {
        $this->listMode = false;
    }
}
