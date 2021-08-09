<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\FrontpageTheme;

class FrontpageThemeCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $hero_image;

    public function render()
    {
        return view('livewire.frontpage-theme-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'hero_image' => 'required|image'
        ]);

        $hero_image_path = $this->hero_image->store('frontpage-theme', 'public');
        $validatedData['hero_image_path'] = $hero_image_path;

        $frontpageTheme = FrontpageTheme::create($validatedData);

        $this->emit('exitCreate');
    }
}
