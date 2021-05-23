<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExtraCurricularComponent extends Component
{
    public $extraCurricularCategoryCreateMode = false;
    public $createMode = false;
    public $deleteMode = false;

    public $deletingExtraCurricular = null;

    protected $listeners = [
        'destroyExtraCurricularCategoryCreate' => 'exitExtraCurricularCategoryCreateMode',
        'destroyExtraCurricularCreate' => 'exitCreateMode',
        'confirmDeleteExtraCurricular',
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

    public function enterExtraCurricularCategoryCreateMode()
    {
        $this->extraCurricularCategoryCreateMode = true;
    }

    public function exitExtraCurricularCategoryCreateMode()
    {
        $this->extraCurricularCategoryCreateMode = false;
    }
}
