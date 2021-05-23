<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\School;

class TopBarComponent extends Component
{

    public $school;
    public function render()
    {

        $this->school = School::firstOrFail();

        return view('livewire.top-bar-component');
    }
}
