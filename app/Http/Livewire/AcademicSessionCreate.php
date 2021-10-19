<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;

class AcademicSessionCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.academic-session-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required|unique:academic_session,name',
        ]);

        $validatedData['status'] = 'default';

        AcademicSession::create($validatedData);
        $this->emit('exitCreate');
    }
}
