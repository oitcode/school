<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ContactMessage;

class ContactMessageComponent extends Component
{
    public $displayMode = false;
    public $deleteMode = false;
    public $updateMode = false;

    public $displayingContactMessage;
    public $deletingContactMessage;
    public $updatingContactMessage;

    protected $listeners = [
        'confirmDeleteContactMessage',
        'exitDelete' => 'exitDeleteMode',
        'displayContactMessage',
        'exitDisplay' => 'exitDisplayMode',
        'deleteContactMessage',
        'updateContactMessage',
        'exitUpdate' => 'exitUpdateMode',
    ];

    public function render()
    {
        return view('livewire.contact-message-component');
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingContactMessage = null;
        $this->deleteMode = false;
    }

    public function confirmDeleteContactMessage(ContactMessage $contactMessage)
    {
        $this->deletingContactMessage = $contactMessage;
        $this->enterDeleteMode();
    }

    public function enterDisplayMode()
    {
        $this->displayMode = true;
    }

    public function exitDisplayMode()
    {
        $this->displayingContactMessage = null;
        $this->displayMode = false;
    }

    public function displayContactMessage(ContactMessage $contactMessage)
    {
        $this->displayingContactMessage = $contactMessage;
        $this->enterDisplayMode();
    }

    public function deleteContactMessage(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        $this->exitDisplayMode();
        $this->emit('updateList');
    }

    public function updateContactMessage(ContactMessage $contactMessage)
    {
        $this->updatingContactMessage = $contactMessage;
        $this->enterUpdateMode();
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingContactMessage = null;
        $this->updateMode = false;
    }
}
