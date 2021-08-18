<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\OClass;

class AcademicSessionOClassCreate extends Component
{
    public $academicSession;

    public $name;

    public function render()
    {
        return view('livewire.academic-session-o-class-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        OClass::create([
            'name' => $validatedData['name'],
            'academic_session_id' => $this->academicSession->academic_session_id,
        ]);

        $this->emit('exitCreateAcademicSessionOclassMode');
    }
}
