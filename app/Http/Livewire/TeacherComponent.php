<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Teacher;

class TeacherComponent extends Component
{
    public $createMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $updatingTeacher = null;
    public $deletingTeacher = null;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'exitUpdate' => 'exitUpdateMode',
        'updateTeacher',
        'confirmDeleteTeacher',
        'deleteTeacher',
        'exitDelete' => 'exitDeleteMode',
    ];

    public function render()
    {
        return view('livewire.teacher-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingTeacher = null;
        $this->updateMode = false;
    }

    public function updateTeacher(Teacher $teacher)
    {
        $this->updatingTeacher = $teacher;
        $this->enterUpdateMode();
    }

    public function confirmDeleteTeacher(Teacher $teacher)
    {
        $this->deletingTeacher = $teacher;
        $this->enterDeleteMode();
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingTeacher = null;
        $this->deleteMode = false;
    }

    public function deleteTeacher(Teacher $teacher)
    {
        $teacher->delete();
        $this->exitDeleteMode();
        $this->emit('updateList');
    }
}
