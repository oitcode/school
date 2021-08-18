<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Section;

class SectionComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $displayingSection;

    protected $listeners = [
        'displaySection',
    ];

    public function render()
    {
        return view('livewire.section-component');
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
        $this->displayingSection = null;
        $this->displayMode = false;
    }

    public function displaySection(Section $section)
    {
        $this->displayingSection = $section;
        $this->enterDisplayMode();
    }
}
