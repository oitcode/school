<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AboutUsContent;

class AboutusComponent extends Component
{
    public $createMode = false;
    public $updateMode = false;

    public $aboutUsContents = null;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'aboutusAdded' => 'exitCreateMode',
        'exitUpdate' => 'exitUpdateMode',
    ];

    public function render()
    {
        $this->aboutUsContents = AboutUsContent::all();

        return view('livewire.aboutus-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updateMode = false;
    }
}
