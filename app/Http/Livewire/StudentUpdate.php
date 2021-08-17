<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentUpdate extends Component
{
    public $student;

    public $name;
    public $email;
    public $phone;
    public $address;

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
        ]);

        $this->student->update($validatedData);
        $this->emit('exitUpdate');
    }
}
