<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

use App\CareersResumeSubmission;

class CareersResumeSubmissionList extends Component
{
    public $careersResumeSubmissions;

    public function render()
    {
        $this->careersResumeSubmissions = CareersResumeSubmission::all();

        return view('livewire.careers-resume-submission-list');
    }

    public function resumeDownload(CareersResumeSubmission $careersResumeSubmission)
    {
        return Storage::download('public/' . $careersResumeSubmission->file_path);
    }
}
