<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactMessageDisplay extends Component
{
    public $contactMessage;

    public function render()
    {
        return view('livewire.contact-message-display');
    }
}
