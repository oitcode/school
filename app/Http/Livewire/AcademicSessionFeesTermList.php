<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionFeesTermList extends Component
{
    public $academicSession;
    public $feesTerms;

    public function render()
    {
        $this->feesTerms = $this->academicSession->feesTerms;

        return view('livewire.academic-session-fees-term-list');
    }
}
