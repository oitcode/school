<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\User;

class UserComponent extends Component
{
    public $createMode = false;
    public $listMode = false;
    public $updateMode = false;

    public $updatingUser;

    protected $listeners = [
        'userAdded' => 'ackUserCreated',
        'exitCreateMode',
        'enterUpdateMode',
        'exitUpdateMode',
        'userUpdated' => 'ackUserUpdated',
    ];

    public function render()
    {
        return view('livewire.user-component');
    }

    public function clearModes()
    {
        $this->exitCreateMode();
        $this->exitListMode();
        $this->exitUpdateMode();
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

    public function enterUpdateMode(User $user)
    {
        $this->clearModes();
        $this->updatingUser = $user;
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingUser = null;
        $this->updateMode = false;
    }

    public function ackUserUpdated()
    {
        session()->flash('message', 'User updated');
    }
}
