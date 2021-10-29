<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class UserUpdate extends Component
{
    public $updatingUser;

    public $name;
    public $email;
    public $role;

    public function mount()
    {
        $this->name = $this->updatingUser->name;
        $this->email = $this->updatingUser->email;
        $this->role = $this->updatingUser->role;
    }

    public function render()
    {
        return view('livewire.user-update');
    }

    public function update()
    {
        if (Gate::denies('create-user')) {
            die ('Whopsie ... not allowed');
        }

        $validatedData = $this->validate([
            /* Todo: Check for unique if new value. */
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $this->updatingUser->update($validatedData);

        $this->emit('exitUpdateMode');
        $this->emit('userUpdated');
    }
}
