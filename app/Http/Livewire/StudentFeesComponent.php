<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentFeesComponent extends Component
{
    public $student;

    public function render()
    {
        return view('livewire.student-fees-component');
    }
}
