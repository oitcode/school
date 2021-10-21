<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OClassSectionList extends Component
{
    public $oClass;
    public $sections;

    public function render()
    {
        $this->sections = $this->oClass->sections;

        return view('livewire.o-class-section-list');
    }
}
