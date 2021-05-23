<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Notice;

class NoticeList extends Component
{
    public $notices = null;

    protected $listeners = [
        'noticeAdded' => 'render',
    ];
    public function render()
    {
        $this->notices = Notice::all();

        return view('livewire.notice-list');
    }
}
