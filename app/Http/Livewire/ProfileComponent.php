<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileComponent extends Component
{
    public $user;

    public function render()
    {
        $this->user = Auth::user();

        return view('livewire.profile-component');
    }
}
