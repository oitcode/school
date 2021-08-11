<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;

class AcademicSessionComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $name;

    public $academicSessions;

    public function render()
    {
        $this->academicSessions = AcademicSession::all();

        return view('livewire.academic-session-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        AcademicSession::create($validatedData);
        $this->exitCreateMode();
    }
}
