<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;

use App\User;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirm;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function store()
    {
        if (Gate::denies('create-user')) {
            die ('Whopsie ... not allowed');
        }

        $validatedData = $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $validatedData['role'] = 'standard';

        User::create($validatedData);

        $this->emit('userAdded');
    }
}
