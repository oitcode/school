<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentDisplay extends Component
{
    public $student;

    public $addGuardianMode = false;

    protected $listeners = [
        'exitAddGuardian' => 'exitAddGuardianMode',
    ];

    public function render()
    {
        return view('livewire.student-display');
    }

    public function enterAddGuardianMode()
    {
        $this->addGuardianMode = true;
    }

    public function exitAddGuardianMode()
    {
        $this->addGuardianMode = false;
    }
}
