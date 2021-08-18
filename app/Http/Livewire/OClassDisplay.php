<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OClassDisplay extends Component
{
    public $oClass;

    public $createOClassSectionMode = false;

    protected $listeners = [
        'exitCreateOClassSectionMode',
    ];

    public function render()
    {
        return view('livewire.o-class-display');
    }

    public function enterAddStudentMode()
    {
        $this->addStudentMode = true;
    }

    public function exitAddStudentMode()
    {
        $this->addStudentMode = false;
    }

    public function enterUploadStudentsFileMode()
    {
        $this->uploadStudentsFileMode = true;
    }

    public function exitUploadStudentsFileMode()
    {
        $this->uploadStudentsFileMode = false;
    }

    public function enterCreateOClassSectionMode()
    {
        $this->createOClassSectionMode = true;
    }

    public function exitCreateOClassSectionMode()
    {
        $this->createOClassSectionMode = false;
    }
}
