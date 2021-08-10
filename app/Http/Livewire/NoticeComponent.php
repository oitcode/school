<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Notice;

class NoticeComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $displayingNotice;
    public $updatingNotice;
    public $deletingNotice;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'confirmDeleteNotice',
        'exitDelete' => 'exitDeleteMode',
        'deleteNotice',
        'updateNotice',
        'exitUpdate' => 'exitUpdateMode',
        'displayNotice',
        'exitDisplay' => 'exitDisplayMode', 
    ];

    public function render()
    {
        return view('livewire.notice-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingNotice = null;
        $this->deleteMode = false;
    }

    public function confirmDeleteNotice(Notice $notice)
    {
        $this->deletingNotice = $notice;
        $this->enterDeleteMode();
    }

    public function updateNotice(Notice $notice)
    {
        $this->updatingNotice = $notice;
        $this->enterUpdateMode();
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingNotice = null;
        $this->updateMode = false;
    }

    public function deleteNotice(Notice $notice)
    {
        $notice->delete();
        $this->exitDeleteMode();
        $this->emit('updateList');
    }

    public function enterDisplayMode()
    {
        $this->displayMode = true;
    }

    public function exitDisplayMode()
    {
        $this->displayingNotice = null;
        $this->displayMode = false;
    }

    public function displayNotice(Notice $notice)
    {
        $this->displayingNotice = $notice;
        $this->enterDisplayMode();
    }
}
