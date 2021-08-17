<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class StudentUpdate extends Component
{
    use WithFileUploads;

    public $student;

    public $name;
    public $email;
    public $phone;
    public $address;
    public $image_file;

    public function render()
    {
        $this->name = $this->student->name;
        $this->email = $this->student->email;
        $this->phone = $this->student->phone;
        $this->address = $this->student->address;

        return view('livewire.student-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'image_file' => 'nullable|image|max:1024',
        ]);

        if ($this->image_file) {
            $imageFilePath = $this->image_file->store('student', 'public');
            $validatedData['image_file_path'] = $imageFilePath;
        }

        $this->student->update($validatedData);
        $this->emit('exitUpdate');
    }
}
