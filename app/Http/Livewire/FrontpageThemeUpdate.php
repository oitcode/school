<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FrontpageThemeUpdate extends Component
{
    use WithFileUploads;

    public $frontpageTheme;

    public $name;
    public $new_hero_image;

    public function render()
    {
        $this->name = $this->frontpageTheme->name;

        return view('livewire.frontpage-theme-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'new_hero_image' => 'nullable|image'
        ]);

        $hero_image_path = $this->new_hero_image->store('frontpage-theme', 'public');
        $validatedData['hero_image_path'] = $hero_image_path;

        $this->frontpageTheme->update($validatedData);

        $this->emit('exitUpdate');
    }
}
