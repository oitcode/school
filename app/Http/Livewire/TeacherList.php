<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Teacher;

class TeacherList extends Component
{
    public $teachers = null;

    protected $listeners = [
        'updateList' => 'render',
    ];

    public function mount()
    {
        $this->teachers = Teacher::all();
    }
    public function render()
    {
        return view('livewire.teacher-list');
    }
}
