<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\MainpageContent;

class MainpageContentList extends Component
{
    public $mainpageContents = null;

    protected $listeners = [
        'updateList' => 'render',
    ];

    public function render()
    {
        $this->mainpageContents = MainpageContent::all();

        return view('livewire.mainpage-content-list');
    }
}
