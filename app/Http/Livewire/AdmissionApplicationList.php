<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AdmissionApplication;

class AdmissionApplicationList extends Component
{
    public $admissionApplications;

    public function render()
    {
        $this->admissionApplications = AdmissionApplication::all();

        return view('livewire.admission-application-list');
    }
}
