<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CareersResumeSubmissionComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public function render()
    {
        return view('livewire.careers-resume-submission-component');
    }
}
