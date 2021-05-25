<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\PrincipalsMessage;

class PrincipalsMessageComponent extends Component
{
    public $createMode = false;
    public $updateMode = false;

    public $principalsMessage = null;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'principalsMessageAdded' => 'exitCreateMode',
        'exitUpdate' => 'exitUpdateMode',
    ];

    public function render()
    {
        if (PrincipalsMessage::count() != 0) {
            $this->principalsMessage = PrincipalsMessage::firstOrFail();
        }

        return view('livewire.principals-message-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updateMode = false;
    }
}
