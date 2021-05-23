<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TeacherComponent extends Component
{
    public $createMode = false;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
    ];

    public function render()
    {
        return view('livewire.teacher-component');
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
