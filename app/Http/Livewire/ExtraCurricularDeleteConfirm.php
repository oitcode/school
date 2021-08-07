<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExtraCurricularDeleteConfirm extends Component
{
    public $deletingExtraCurricular;

    public function render()
    {
        return view('livewire.extra-curricular-delete-confirm');
    }
}
