<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesStructure;

class FeesStructureList extends Component
{
    public $feesStructures;

    public function render()
    {
        $this->feesStructures = FeesStructure::all();

        return view('livewire.fees-structure-list');
    }
}
