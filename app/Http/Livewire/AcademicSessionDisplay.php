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

    public $oClassListMode = false;
    public $feesTermListMode = false;
    public $feesStructureCreateMode = false;
    public $feesStructureUpdateMode = false;
    public $feesStructureViewMode = false;

    public $academicSessions;

    protected $listeners = [
        'exitPublishFees' => 'exitPublishFeesMode',
        'exitCreateAcademicSessionOclassMode',
        'exitCreateAcademicSessionFeesStructureMode',
        'exitFeesStructureCreateMode',
        'exitFeesStructureUpdateMode',
        'exitPublishFee',
    ];

    public function render()
    {
        $this->academicSessions = AcademicSession::all();
        return view('livewire.academic-session-display');
    }

    public function enterPublishFeesMode()
    {
        $this->clearModes();
        $this->publishFeesMode = true;
    }

    public function exitPublishFeesMode()
    {
        $this->publishFeesMode = false;
    }

    public function enterViewFeesStructureMode()
    {
        $this->clearModes();
        $this->viewFeesStructureMode = true;
    }

    public function exitViewFeesStructureMode()
    {
        $this->viewFeesStructureMode = false;
    }

    public function enterCreateAcademicSessionOclassMode()
    {
        $this->clearModes();
        $this->createAcademicSessionOClassMode = true;
    }

    public function exitCreateAcademicSessionOclassMode()
    {
        $this->createAcademicSessionOClassMode = false;
    }

    public function enterCreateAcademicSessionFeesStructureMode()
    {
        $this->clearModes();
        $this->createAcademicSessionFeesStructureMode = true;
    }

    public function exitCreateAcademicSessionFeesStructureMode()
    {
        $this->createAcademicSessionFeesStructureMode = false;
    }

    public function enterFeesStructureMode()
    {
        $this->clearModes();
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
        $this->clearModes();
    }

    public function clearModes()
    {
        $this->exitCreateAcademicSessionFeesStructureMode();
        $this->exitCreateAcademicSessionOclassMode();
        $this->exitPublishFeesMode();
        $this->exitViewFeesStructureMode();
        $this->exitOClassListMode();
        $this->exitFeesTermListMode();
        $this->exitFeesStructureCreateMode();
        $this->exitFeesStructureViewMode();
        $this->exitFeesStructureUpdateMode();
    }

    public function enterOClassListMode()
    {
        $this->clearModes();
        $this->oClassListMode = true;
    }

    public function exitOClassListMode()
    {
        $this->oClassListMode = false;
    }

    public function enterFeesTermListMode()
    {
        $this->clearModes();
        $this->feesTermListMode = true;
    }

    public function exitFeesTermListMode()
    {
        $this->feesTermListMode = false;
    }

    public function enterFeesStructureCreateMode()
    {
        $this->clearModes();
        $this->feesStructureCreateMode = true;
    }

    public function exitFeesStructureCreateMode()
    {
        $this->feesStructureCreateMode = false;
    }

    public function enterFeesStructureViewMode()
    {
        $this->clearModes();
        $this->feesStructureViewMode = true;
    }

    public function exitFeesStructureViewMode()
    {
        $this->feesStructureViewMode = false;
    }

    public function enterFeesStructureUpdateMode()
    {
        $this->clearModes();
        $this->feesStructureUpdateMode = true;
    }

    public function exitFeesStructureUpdateMode()
    {
        $this->feesStructureUpdateMode = false;
    }

    public function exitPublishFee($term)
    {
        $this->exitPublishFeesMode();
        session()->flash('message', 'Fees published for term: ' . $term);
    }
}
