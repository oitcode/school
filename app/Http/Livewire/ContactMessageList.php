<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ContactMessage;

class ContactMessageList extends Component
{
    public $contactMessages = null;

    protected $listeners = [
        'updateList' => 'render',
    ];

    public function render()
    {
        $this->contactMessages = ContactMessage::orderBy('created_at', 'DESC')->get();

        return view('livewire.contact-message-list');
    }
}
