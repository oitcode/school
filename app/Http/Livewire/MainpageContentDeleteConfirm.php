<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainpageContentDeleteConfirm extends Component
{
    public $deletingMainpageContent;

    public function render()
    {
        return view('livewire.mainpage-content-delete-confirm');
    }
}
