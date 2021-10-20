<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionOClassList extends Component
{
    public $academicSession;
    public $oClasses;

    public function render()
    {
        $this->oClasses = $this->academicSession->oClasses;

        return view('livewire.academic-session-o-class-list');
    }
}
