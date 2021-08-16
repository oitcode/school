<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\AcademicSession;
use App\AdmissionApplication;

class AdmissionApplicationCreate extends Component
{
    use WithFileUploads;

    public $student_name;
    public $student_email;
    public $student_phone;
    public $student_address;

    public $primary_guardian_name;
    public $primary_guardian_email;
    public $primary_guardian_phone;
    public $primary_guardian_address;

    public $secondary_guardian_name;
    public $secondary_guardian_email;
    public $secondary_guardian_phone;
    public $secondary_guardian_address;

    public $o_class;
    public $old_school_name;
    public $old_school_location;
    public $old_school_class;

    public $image_file;
    public $resume_file;

    public $academic_session_id;

    public $academicSessions;

    public function render()
    {
        $this->academicSessions = AcademicSession::all();

        return view('livewire.admission-application-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'student_name' => 'required',
            'student_email' => 'nullable',
            'student_phone' => 'nullable',
            'student_address' => 'nullable',

            'primary_guardian_name' => 'required',
            'primary_guardian_email' => 'nullable',
            'primary_guardian_phone' => 'required',
            'primary_guardian_address' => 'nullable',

            'secondary_guardian_name' => 'nullable',
            'secondary_guardian_email' => 'nullable',
            'secondary_guardian_phone' => 'nullable',
            'secondary_guardian_address' => 'nullable',

            'o_class' => 'required',

            'old_school_name' => 'nullable',
            'old_school_location' => 'nullable',
            'old_school_class' => 'nullable',

            'image_file' => 'nullable|image|max:1024',
            'resume_file' => 'nullable|file|max:1024',

            'academic_session_id' => 'required',
        ]);

        if ($this->image_file) {
            $imageFilePath = $this->image_file->store('admission', 'public');
            $validatedData['image_file_path'] = $imageFilePath;
        }

        if ($this->resume_file) {
            $resumeFilePath = $this->resume_file->store('admission', 'public');
            $validatedData['resume_file_path'] = $resumeFilePath;
        }

        AdmissionApplication::create($validatedData);

        $this->resetInputFields();
        session()->flash('message', 'Your admission form is received. We will get back to you.');
    }

    public function resetInputFields()
    {
        $this->student_name = '';
        $this->student_name = '';
        $this->student_email = '';
        $this->student_phone = '';
        $this->student_address = '';

        $this->primary_guardian_name = '';
        $this->primary_guardian_email = '';
        $this->primary_guardian_phone = '';
        $this->primary_guardian_address = '';

        $this->secondary_guardian_name = '';
        $this->secondary_guardian_email = '';
        $this->secondary_guardian_phone = '';
        $this->secondary_guardian_address = '';

        $this->o_class = '';
        $this->old_school_name = '';
        $this->old_school_location = '';
        $this->old_school_class = '';

        $this->image_file = '';
        $this->resume_file = '';

        $this->academic_session_id = '';
    }
}
