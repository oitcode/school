<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactMessageDeleteConfirm extends Component
{
    public $deletingContactMessage;

    public function render()
    {
        return view('livewire.contact-message-delete-confirm');
    }
}
