<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\OClass;

class OClassList extends Component
{
    public $oClasses;

    public function render()
    {
        $this->oClasses = OClass::all();

        return view('livewire.o-class-list');
    }
}
