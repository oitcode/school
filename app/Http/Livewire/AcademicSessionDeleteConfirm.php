<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionDeleteConfirm extends Component
{
    public $deletingAcademicSession;

    public function render()
    {
        return view('livewire.academic-session-delete-confirm');
    }
}
