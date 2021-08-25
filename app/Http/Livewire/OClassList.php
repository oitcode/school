<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\OClass;
use App\AcademicSession;

class OClassList extends Component
{
    public $oClasses;

    public $currentAcademicSession;
    public $displayAcademicSession;
    public $academicSessions;

    public function render()
    {
        $this->currentAcademicSession = AcademicSession::where('status', 'current')->first();
        $this->displayAcademicSession = $this->currentAcademicSession;
        $this->academicSessions = AcademicSession::all();

        $this->oClasses = $this->displayAcademicSession->oClasses;

        return view('livewire.o-class-list');
    }
}
