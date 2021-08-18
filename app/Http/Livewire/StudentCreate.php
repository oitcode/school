<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Student;
use App\SectionStudent;

class StudentCreate extends Component
{
    public $native = true;

    public $name;
    public $email;
    public $phone;
    public $address;

    public $section_id;

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
            'section_id' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $student = Student::create($validatedData);

            SectionStudent::create([
                'section_id' => $this->section_id,
                'student_id' => $student->student_id,
                'status' => 'current',
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $this->emit('exitCreateStudent');
        $this->emit('exitCreate');
    }
}
