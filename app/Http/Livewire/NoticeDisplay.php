<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoticeDisplay extends Component
{
    public $notice;

    public function render()
    {
        return view('livewire.notice-display');
    }
}
