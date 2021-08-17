<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesStructure;

class FeesStructureComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $displayingFeesStructure;
    public $updatingFeesStructure;

    protected $listeners = [
      'exitCreateMode',
      'exitDisplayMode',
      'exitUpdateMode',
      'displayFeesStructure',
      'updateFeesStructure',
    ];

    public function render()
    {
        return view('livewire.fees-structure-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterDisplayMode()
    {
        $this->displayMode = true;
    }

    public function exitDisplayMode()
    {
        $this->displayingFeesStructure = null;
        $this->displayMode = false;
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingFeesStructure = null;
        $this->updateMode = false;
    }


    public function displayFeesStructure(FeesStructure $feesStructure)
    {
        $this->displayingFeesStructure = $feesStructure;
        $this->enterDisplayMode();
    }

    public function updateFeesStructure(FeesStructure $feesStructure)
    {
        $this->updatingFeesStructure = $feesStructure;
        $this->enterUpdateMode();
    }
}
