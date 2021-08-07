<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Memo;

class MemoList extends Component
{
    public $memos = null;

    protected $listeners = [
        'updateList' => 'render',
    ];

    public function render()
    {
        $this->memos = Memo::orderBy('created_at', 'DESC')->get();

        return view('livewire.memo-list');
    }
}
