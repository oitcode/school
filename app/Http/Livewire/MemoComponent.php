<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MemoComponent extends Component
{
    public $createMode = false;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
    ];

    public function render()
    {
        return view('livewire.memo-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }
}
