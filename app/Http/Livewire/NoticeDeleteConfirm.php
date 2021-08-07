<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoticeDeleteConfirm extends Component
{
    public $deletingNotice;

    public function render()
    {
        return view('livewire.notice-delete-confirm');
    }
}
