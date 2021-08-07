<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Memo;

class MemoComponent extends Component
{
    public $createMode = false;
    public $deleteMode = false;

    public $deletingMemo;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'confirmDeleteMemo',
        'deleteMemo',
        'exitDelete' => 'exitDeleteMode',
    ];

    public function render()
    {
        return view('livewire.memo-component');
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
        $this->deletingMemo = null;
        $this->deleteMode = false;
    }

    public function deleteMemo(Memo $memo)
    {
        $memo->delete();
        $this->exitDeleteMode();
        $this->emit('updateList');
    }

    public function confirmDeleteMemo(Memo $memo)
    {
        $this->deletingMemo = $memo;
        $this->enterDeleteMode();
    }
}
