<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionDisplay extends Component
{
    public $academicSession;

    public $publishFeesMode = false;

    protected $listeners = [
        'exitPublishFees' => 'exitPublishFeesMode',
    ];

    public function render()
    {
        return view('livewire.academic-session-display');
    }

    public function enterPublishFeesMode()
    {
        $this->publishFeesMode = true;
    }

    public function exitPublishFeesMode()
    {
        $this->publishFeesMode = false;
    }
}
