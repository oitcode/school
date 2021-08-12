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

    public $displayingAcademicSession;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'displayAcademicSession',
        'exitDisplay' => 'exitDisplayMode',
    ];

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

    public function enterDisplayMode()
    {
        $this->displayMode = true;
    }

    public function exitDisplayMode()
    {
        $this->displayingAcademicSession = null;
        $this->displayMode = false;
    }

    public function displayAcademicSession(AcademicSession $academicSession)
    {
        $this->displayingAcademicSession = $academicSession;
        $this->enterDisplayMode();
    }
}
