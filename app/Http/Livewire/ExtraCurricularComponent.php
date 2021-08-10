<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ExtraCurricular;

class ExtraCurricularComponent extends Component
{
    public $extraCurricularCategoryCreateMode = false;

    public $categoryCreateMode = false;
    public $createMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $updatingExtraCurricular = null;
    public $deletingExtraCurricular = null;

    protected $listeners = [
        'exitCategoryCreate' => 'exitCategoryCreateMode',
        'exitCreate' => 'exitCreateMode',
        'confirmDeleteExtraCurricular',
        'deleteExtraCurricular',
        'exitDelete' => 'exitDeleteMode',
        'updateExtraCurricular',
        'exitUpdate' => 'exitUpdateMode',
    ];

    public function render()
    {
        return view('livewire.extra-curricular-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterCategoryCreateMode()
    {
        $this->categoryCreateMode = true;
    }

    public function exitCategoryCreateMode()
    {
        $this->categoryCreateMode = false;
    }

    public function confirmDeleteExtraCurricular(ExtraCurricular $extraCurricular)
    {
        $this->deletingExtraCurricular = $extraCurricular;
        $this->enterDeleteMode();
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingExtraCurricular = null;
        $this->deleteMode = false;
    }

    public function deleteExtraCurricular(ExtraCurricular $extraCurricular)
    {
        $extraCurricular->delete();
        $this->exitDeleteMode();
        $this->emit('updateList');
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingExtraCurricular = null;
        $this->updateMode = false;
    }

    public function updateExtraCurricular(ExtraCurricular $extraCurricular)
    {
        $this->updatingExtraCurricular = $extraCurricular;
        $this->enterUpdateMode();
    }
}
