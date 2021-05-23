<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Facility;

class FacilityList extends Component
{
    public $facilities = null;

    protected $listeners = [
        'facilityAdded' => 'render',
        'refreshFacilityList' => 'render',
    ];

    public function render()
    {
        $this->facilities = Facility::all();

        return view('livewire.facility-list');
    }
}
