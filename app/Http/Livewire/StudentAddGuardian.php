<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Guardian;
use App\GuardianStudent;

class StudentAddGuardian extends Component
{
    public $student;

    public $name;
    public $email;
    public $phone;
    public $address;
    public $type;

    public function render()
    {
        return view('livewire.student-add-guardian');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'type' => 'required',
        ]);

        try {
            $guardian = Guardian::create($validatedData);

            $guardianStudent = new GuardianStudent;

            $guardianStudent->guardian_id = $guardian->guardian_id;
            $guardianStudent->student_id = $this->student->student_id;
            $guardianStudent->type = $validatedData['type'];

            $guardianStudent->save();

            DB::commit();

            $this->emit('exitAddGuardian');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
