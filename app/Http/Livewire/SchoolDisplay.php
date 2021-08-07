<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\School;

class SchoolDisplay extends Component
{
    public $school;

    public function render()
    {
        $this->school = School::first();

        if (!$this->school) {
            $this->school = null;
        }

        return view('livewire.school-display');
    }
}
