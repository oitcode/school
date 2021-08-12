<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentDisplay extends Component
{
    public $student;

    public function render()
    {
        return view('livewire.student-display');
    }
}
