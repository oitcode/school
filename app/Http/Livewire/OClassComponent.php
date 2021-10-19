<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\OClass;

class OClassComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $createOClassSectionMode = false;

    public $displayingOClass;
    public $updatingOClass;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'displayOClass',
        'exitDisplay' => 'exitDisplayMode',
        'updateOClass',
        'exitUpdate' => 'exitUpdateMode',
    ];

    public function render()
    {
        return view('livewire.o-class-component');
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
        $this->displayingOClass = null;
        $this->displayMode = false;
    }

    public function displayOClass(Oclass $oClass)
    {
        $this->displayingOClass = $oClass;
        $this->enterDisplayMode();
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingOClass = null;
        $this->updateMode = false;
    }

    public function updateOClass(OClass $oClass) 
    {
        $this->updatingOClass = $oClass;
        $this->enterUpdateMode();
    }
}
