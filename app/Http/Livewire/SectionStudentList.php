<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SectionStudentList extends Component
{
    public $section;
    public $students;

    public function render()
    {
        $this->students = $this->section->students;

        return view('livewire.section-student-list');
    }
}
