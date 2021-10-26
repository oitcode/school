<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;

class ChartOClassStudent extends Component
{
    public $academicSessions;
    public $displayAcademicSession;

    public $innerMode = true;

    public function mount()
    {
        $this->academicSessions = AcademicSession::all();
        $this->displayAcademicSession = AcademicSession::where('status', 'current')->first();
    }

    public function render()
    {
        return view('livewire.chart-o-class-student');
    }

    public function setDisplayAcademicSession(AcademicSession $academicSession)
    {
        $this->openInner();
        $this->displayAcademicSession = $academicSession;
    }

    public function closeInner()
    {
        $this->innerMode = false;
    }

    public function openInner()
    {
        $this->innerMode = true;
    }
}
