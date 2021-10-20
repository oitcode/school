<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionFeesStructureView extends Component
{
    public $academicSession;
    public $feesStructure;

    public function render()
    {
        $this->feesStructure = $this->academicSession->feesStructure;

        return view('livewire.academic-session-fees-structure-view');
    }
}
