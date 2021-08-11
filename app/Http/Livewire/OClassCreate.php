<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;
use App\OClass;

class OClassCreate extends Component
{
    public $academicSessions;

    public $name;
    public $academic_session_id;

    public function render()
    {
        $this->academicSessions = AcademicSession::all();

        return view('livewire.o-class-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'academic_session_id' => 'required',
        ]);

        OClass::create($validatedData);

        $this->emit('exitCreate');
    }
}
