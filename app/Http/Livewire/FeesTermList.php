<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesTerm;

class FeesTermList extends Component
{
    public $academicSession;

    public $feesTerms;

    public function render()
    {
        $this->feesTerms = $this->academicSession->feesTerms;

        return view('livewire.fees-term-list');
    }
}
