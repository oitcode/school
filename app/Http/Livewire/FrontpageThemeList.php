<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FrontpageTheme;

class FrontpageThemeList extends Component
{
    public $frontpageThemes;

    public function render()
    {
        $this->frontpageThemes = FrontpageTheme::all();

        return view('livewire.frontpage-theme-list');
    }
}
