<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Teacher;

class TeacherList extends Component
{
    public $teachers = null;

    public function render()
    {
        $this->teachers = Teacher::all();

        return view('livewire.teacher-list');
    }
}
