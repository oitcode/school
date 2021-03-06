<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\School;

class SchoolComponent extends Component
{
    public $school;

    public $updateMode = false;
    public $createMode = false;

    protected $listeners = [
        'exitUpdate' => 'exitUpdateMode',
        'exitCreate' => 'exitCreateMode',
    ];

    public function render()
    {
        $this->school = School::first();

        return view('livewire.school-component');
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updateMode = false;
    }

    public function updateSchool(School $school)
    {
        $this->enterUpdateMode();
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
