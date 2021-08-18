<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SectionDisplay extends Component
{
    public $section;

    public $addNewStudentMode = false;
    public $addNewStudentsFromFileMode = false;

    protected $listeners = [
        'exitCreateStudent' => 'exitAddNewStudentMode',
        'exitAddNewStudentsFromFileMode',
    ];

    public function render()
    {
        return view('livewire.section-display');
    }

    public function enterAddNewStudentMode()
    {
        $this->addNewStudentMode = true;
    }

    public function exitAddNewStudentMode()
    {
        $this->addNewStudentMode = false;
    }

    public function enterAddNewStudentsFromFileMode()
    {
        $this->addNewStudentsFromFileMode = true;
    }

    public function exitAddNewStudentsFromFileMode()
    {
        $this->addNewStudentsFromFileMode = false;
    }
}
