<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Teacher;

class TeacherCreate extends Component
{
    public $name;
    public $email;
    public $phone;
    public $info;
    public $comment;

    public function render()
    {
        return view('livewire.teacher-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'info' => 'nullable',
            'comment' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            $teacher = Teacher::create($validatedData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
