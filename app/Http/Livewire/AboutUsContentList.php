<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AboutUsContent;

class AboutUsContentList extends Component
{
    public $aboutUsContents;

    public function render()
    {
        $this->aboutUsContents = AboutUsContent::all();

        return view('livewire.about-us-content-list');
    }
}
