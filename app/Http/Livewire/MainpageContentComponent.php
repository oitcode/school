<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\MainpageContent;

class MainpageContentComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $updatingMainpageContent;
    public $deletingMainpageContent;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'updateMainpageContent',
        'exitUpdate' => 'exitUpdateMode',
        'confirmDeleteMainpageContent',
        'deleteMainpageContent',
        'exitDelete' => 'exitDeleteMode',
    ];

    public function render()
    {
        return view('livewire.mainpage-content-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function updateMainpageContent(MainpageContent $mainpageContent )
    {
        $this->updatingMainpageContent = $mainpageContent;
        $this->enterUpdateMode();
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingMainpageContent = null;
        $this->updateMode = false;
    }

    public function confirmDeleteMainpageContent(MainpageContent $mainpageContent)
    {
        $this->deletingMainpageContent = $mainpageContent;
        $this->enterDeleteMode();
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingMainpageContent = null;
        $this->deleteMode = false;
    }

    public function deleteMainpageContent(MainpageContent $mainpageContent)
    {
        $mainpageContent->delete();
        $this->exitDeleteMode();
        $this->emit('updateList');
    }
}
