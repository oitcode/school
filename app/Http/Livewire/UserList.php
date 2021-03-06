<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\User;

class UserList extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::all();

        return view('livewire.user-list');
    }
}
