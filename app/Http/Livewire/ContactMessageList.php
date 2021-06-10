<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ContactMessage;

class ContactMessageList extends Component
{
    public $contactMessages = null;

    public function render()
    {
        $this->contactMessages = ContactMessage::all();

        return view('livewire.contact-message-list');
    }
}
