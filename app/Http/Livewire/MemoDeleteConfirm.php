<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MemoDeleteConfirm extends Component
{
    public $deletingMemo;

    public function render()
    {
        return view('livewire.memo-delete-confirm');
    }
}
