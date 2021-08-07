<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TeacherDeleteConfirm extends Component
{
    public $deletingTeacher;

    public function render()
    {
        return view('livewire.teacher-delete-confirm');
    }
}
