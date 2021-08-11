<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Student;

class StudentList extends Component
{
    public $students;

    public function render()
    {
        $this->students = Student::all();

        return view('livewire.student-list');
    }
}
