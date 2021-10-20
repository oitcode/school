<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SectionDisplay extends Component
{
    public $section;

    public $addNewStudentMode = false;
    public $addNewStudentsFromFileMode = false;
    public $studentListMode = false;


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
        $this->clearModes();
        $this->addNewStudentMode = true;
    }

    public function exitAddNewStudentMode()
    {
        $this->addNewStudentMode = false;
    }

    public function enterAddNewStudentsFromFileMode()
    {
        $this->clearModes();
        $this->addNewStudentsFromFileMode = true;
    }

    public function exitAddNewStudentsFromFileMode()
    {
        $this->addNewStudentsFromFileMode = false;
    }

    public function enterStudentListMode()
    {
        $this->clearModes();
        $this->studentListMode = true;
    }

    public function exitStudentListMode()
    {
        $this->studentListMode = false;
    }

    public function clearModes()
    {
        $this->exitAddNewStudentsFromFileMode();
        $this->exitAddNewStudentMode();
        $this->exitStudentListMode();
    }
}
