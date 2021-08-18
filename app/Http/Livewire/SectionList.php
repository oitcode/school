<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Section;

class SectionList extends Component
{
    public $sections;

    public function render()
    {
        $this->sections = Section::all();

        return view('livewire.section-list');
    }
}
