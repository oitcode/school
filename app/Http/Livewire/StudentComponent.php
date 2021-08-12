<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Student;

class StudentComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $displayingStudent;
    public $updatingStudent;
    public $deletingStudent;

    protected $listeners = [
        'displayStudent',
        'exitDisplay' => 'exitDisplayMode',
    ];

    public function render()
    {
        return view('livewire.student-component');
    }

    public function enterDisplayMode()
    {
        $this->displayMode = true;
    }

    public function exitDisplayMode()
    {
        $this->displayingStudent = null;
        $this->displayMode = false;
    }

    public function displayStudent(Student $student)
    {
        $this->displayingStudent = $student;
        $this->enterDisplayMode();
    }
}
