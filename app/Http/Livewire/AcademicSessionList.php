<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;

class AcademicSessionList extends Component
{
    public $academicSessions;

    protected $listeners = [
        'updateList' => 'render',
    ];

    public function render()
    {
        $this->academicSessions = AcademicSession::all();

        return view('livewire.academic-session-list');
    }
}
