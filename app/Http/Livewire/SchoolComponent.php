<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\School;

class SchoolComponent extends Component
{
    public $school;
    public $updateMode = false;

    protected $listeners = [
        'exitUpdate' => 'exitUpdateMode',
    ];

    public function render()
    {
        $this->school = School::firstOrFail();

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
}
