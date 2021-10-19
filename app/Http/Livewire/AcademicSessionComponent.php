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
    public $updatingAcademicSession;
    public $deletingAcademicSession;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'displayAcademicSession',
        'exitDisplay' => 'exitDisplayMode',
        'updateAcademicSession',
        'exitUpdate' => 'exitUpdateMode',
        'confirmDeleteAcademicSession',
        'deleteAcademicSession',
        'exitDelete' => 'exitDeleteMode',
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

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingAcademicSession = null;
        $this->updateMode = false;
    }

    public function updateAcademicSession(AcademicSession $academicSession)
    {
        $this->updatingAcademicSession = $academicSession;
        $this->enterUpdateMode();
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingAcademicSession = null;
        $this->deleteMode = false;
    }

    public function confirmDeleteAcademicSession(AcademicSession $academicSession)
    {
        $this->deletingAcademicSession = $academicSession;
        $this->enterDeleteMode();
    }

    public function deleteAcademicSession(AcademicSession $academicSession)
    {
        $academicSession->delete();
        $this->exitDisplayMode();
        $this->emit('updateList');
    }
}
