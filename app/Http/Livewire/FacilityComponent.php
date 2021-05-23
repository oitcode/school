<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Facility;

class FacilityComponent extends Component
{
    public $facilityCategoryCreateMode = false;
    public $createMode = false;
    public $deleteMode = false;

    public $deletingFacility = null;

    protected $listeners = [
        'destroyFacilityCategoryCreate' => 'exitFacilityCategoryCreateMode',
        'destroyFacilityCreate' => 'exitCreateMode',
        'confirmDeleteFacility',
    ];

    public function render()
    {
        return view('livewire.facility-component');
    }

    public function enterFacilityCategoryCreateMode()
    {
        $this->facilityCategoryCreateMode = true;
    }

    public function exitFacilityCategoryCreateMode()
    {
        $this->facilityCategoryCreateMode = false;
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deleteMode = false;
        $this->deletingFacility = null;
    }

    public function confirmDeleteFacility(Facility $facility)
    {
        $this->enterDeleteMode();
        $this->deletingFacility = $facility;
    }

    public function deleteFacility(Facility $facility)
    {
        $facility->delete();
        $this->exitDeleteMode();
        $this->emit('refreshFacilityList');
    }
}
