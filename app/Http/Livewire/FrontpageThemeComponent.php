<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FrontpageTheme;

class FrontpageThemeComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $updatingFrontpageTheme;
    public $deletingFrontpageTheme;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'updateFrontpageTheme',
        'exitUpdate' => 'exitUpdateMode',
    ];
    public function render()
    {
        return view('livewire.frontpage-theme-component');
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
        $this->updatingFrontpageTheme = false;
        $this->updateMode = false;
    }

    public function updateFrontpageTheme(FrontpageTheme $frontpageTheme)
    {
        $this->updatingFrontpageTheme = $frontpageTheme;
        $this->enterUpdateMode();
    }
}

