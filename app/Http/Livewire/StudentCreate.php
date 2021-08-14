<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Student;

class StudentCreate extends Component
{
    public $native = true;

    public $name;
    public $email;
    public $phone;
    public $address;

    public $o_class_id;

    public function render()
    {
        return view('livewire.student-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'o_class_id' => 'required',
        ]);

        Student::create($validatedData);

        $this->emit('exitCreateStudent');
        $this->emit('exitCreate');
    }
}
