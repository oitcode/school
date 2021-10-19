<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Section;
use App\AcademicSession;

class SectionList extends Component
{
    public $sections;

    public $currentAcademicSession;
    public $displayAcademicSession;
    public $academicSessions;


    public function mount()
    {
        $this->currentAcademicSession = AcademicSession::where('status', 'current')->first();
        $this->displayAcademicSession = $this->currentAcademicSession;
    }

    public function render()
    {
        $this->academicSessions = AcademicSession::all();

        $oClasses = $this->displayAcademicSession->oClasses;

        //$this->sections = new Collection();
        $this->sections = collect();

        foreach ($oClasses as $oClass) {
            $this->sections = $this->sections->merge($oClass->sections);
        }

        return view('livewire.section-list');
    }

    public function setDisplayingAcademicSession(AcademicSession $academicSession)
    {
        $this->displayAcademicSession = $academicSession;
    }
}
