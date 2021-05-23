<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoticeComponent extends Component
{
    public $createMode = false;

    protected $listeners = [
        'exitCreateMode' => 'exitCreateMode',
    ];

    public function render()
    {
        return view('livewire.notice-component');
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
