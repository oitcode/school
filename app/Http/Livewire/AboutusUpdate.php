<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class AboutusUpdate extends Component
{
    use WithFileUploads;

    public $aboutUs;

    public $paragraph_1;
    public $paragraph_2;
    public $paragraph_3;

    public $image1 = null;
    public $image2 = null;
    public $image3 = null;

    public function render()
    {
        $this->paragraph_1 = $this->aboutUs->paragraph_1;
        $this->paragraph_2 = $this->aboutUs->paragraph_2;
        $this->paragraph_3 = $this->aboutUs->paragraph_3;

        return view('livewire.aboutus-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'paragraph_1' => 'required',
            'paragraph_2' => 'required',
            'paragraph_3' => 'required',

            'image1' => 'nullable|image',
            'image2' => 'nullable|image',
            'image3' => 'nullable|image',
        ]);

        if ($this->image1 !== null) {
            $imagePath = $this->image1->store('about_us', 'public');
            $validatedData['image_path_1'] = $imagePath;
        }

        if ($this->image2 !== null) {
            $imagePath = $this->image2->store('about_us', 'public');
            $validatedData['image_path_2'] = $imagePath;
        }

        if ($this->image3 !== null) {
            $imagePath = $this->image3->store('about_us', 'public');
            $validatedData['image_path_3'] = $imagePath;
        }

        $this->aboutUs->update($validatedData);

        session()->flash('message', 'Updated');
        $this->emit('exitUpdate');
    }
}
