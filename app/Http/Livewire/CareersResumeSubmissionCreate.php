<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\CareersResumeSubmission;

class CareersResumeSubmissionCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $resume_file;

    public function render()
    {
        return view('livewire.careers-resume-submission-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'resume_file' => 'required|file',
        ]);

        $filePath = $this->resume_file->store('careers_resume', 'public');
        $validatedData['file_path'] = $filePath;

        CareersResumeSubmission::create($validatedData);
        $this->resetInputFields();

        session()->flash('message', 'Resume received.');
    }

    public function resetInputFields()
    {
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->resume_file = "";
    }
}
