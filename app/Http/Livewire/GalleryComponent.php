<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GalleryComponent extends Component
{
    public $createMode = false;

    protected $listeners = [
        'destroyGalleryCreate' => 'exitCreateMode',
    ];

    public function render()
    {
        return view('livewire.gallery-component');
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
