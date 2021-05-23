<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Gallery;

class GalleryList extends Component
{
    public $galleries = null;

    public function render()
    {
        $this->galleries = Gallery::all();

        return view('livewire.gallery-list');
    }
}
