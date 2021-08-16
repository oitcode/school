<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentDisplay extends Component
{
    public $student;

    public $addGuardianMode = false;
    public $displayFeesMode = true;

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

    public function hideFees()
    {
        $this->exitDisplayFeesMode();
    }

    public function enterDisplayFeesMode()
    {
        $this->displayFeesMode = true;
    }

    public function exitDisplayFeesMode()
    {
        $this->displayFeesMode = false;
    }
}
