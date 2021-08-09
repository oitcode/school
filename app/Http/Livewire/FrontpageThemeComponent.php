<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
}
