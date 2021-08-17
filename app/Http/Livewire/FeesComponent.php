<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;

class FeesComponent extends Component
{
    public $currentAcademicSession;

    public $createFeesStructureMode = false;
    public $listMode = false;

    public $currentMode = 'none';

    protected $listeners = [
        'exitFeesStructureCreateMode',
    ];

    public function render()
    {
        $this->currentAcademicSession = AcademicSession::where('status', 'current')->first();

        return view('livewire.fees-component');
    }

    public function enterFeesStructureCreateMode()
    {
        $this->createFeesStructureMode = true;
    }

    public function exitFeesStructureCreateMode()
    {
        $this->createFeesStructureMode = false;
    }

    public function enterListMode()
    {
        $this->listMode = true;
    }

    public function exitListMode()
    {
        $this->listMode = false;
    }

}
