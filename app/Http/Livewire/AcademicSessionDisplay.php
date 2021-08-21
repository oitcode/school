<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;

class AcademicSessionDisplay extends Component
{
    public $academicSession;

    public $publishFeesMode = false;
    public $viewFeesStructureMode = false;
    public $createAcademicSessionOClassMode = false;
    public $createAcademicSessionFeesStructureMode = false;
    public $academicSessionFeesStructureMode = false;

    public $feesStructureMode = false;

    public $createFeesStructureMode = false;

    public $academicSessions;

    protected $listeners = [
        'exitPublishFees' => 'exitPublishFeesMode',
        'exitCreateAcademicSessionOclassMode',
        'exitCreateAcademicSessionFeesStructureMode',
    ];

    public function render()
    {
        $this->academicSessions = AcademicSession::all();
        return view('livewire.academic-session-display');
    }

    public function enterPublishFeesMode()
    {
        $this->publishFeesMode = true;
    }

    public function exitPublishFeesMode()
    {
        $this->publishFeesMode = false;
    }

    public function enterViewFeesStructureMode()
    {
        $this->viewFeesStructureMode = true;
    }

    public function exitViewFeesStructureMode()
    {
        $this->viewFeesStructureMode = false;
    }

    public function enterCreateAcademicSessionOclassMode()
    {
        $this->createAcademicSessionOClassMode = true;
    }

    public function exitCreateAcademicSessionOclassMode()
    {
        $this->createAcademicSessionOClassMode = false;
    }

    public function enterCreateAcademicSessionFeesStructureMode()
    {
        $this->createAcademicSessionFeesStructureMode = true;
    }

    public function exitCreateAcademicSessionFeesStructureMode()
    {
        $this->createAcademicSessionFeesStructureMode = false;
    }

    public function enterFeesStructureMode()
    {
        $this->feesStructureMode = true;

        if ($this->academicSession->feesStructure) {
            $this->enterViewFeesStructureMode();
        } else {
            $this->enterCreateAcademicSessionFeesStructureMode();
        }
    }

    public function setDisplayingAcademicSession(AcademicSession $academicSession)
    {
        $this->academicSession = $academicSession;
    }
}
