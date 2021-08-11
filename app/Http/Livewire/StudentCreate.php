<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Student;

class StudentCreate extends Component
{
    public $name;
    public $o_class_id;

    public function render()
    {
        return view('livewire.student-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'o_class_id' => 'required',
        ]);

        Student::create($validatedData);
    }
}
