<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesInvoice;

class FeesList extends Component
{
    public $feesInvoices;

    public function render()
    {
        $this->feesInvoices = FeesInvoice::all();

        return view('livewire.fees-list');
    }
}
