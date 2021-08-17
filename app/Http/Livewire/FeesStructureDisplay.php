<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeesStructureDisplay extends Component
{
    public $feesStructure;

    public function render()
    {
        return view('livewire.fees-structure-display');
    }
}
