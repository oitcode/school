<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TeacherUpdate extends Component
{
    public $teacher;

    public $name;
    public $email;
    public $phone;
    public $info;
    public $comment;

    public function render()
    {
        $this->name = $this->teacher->name;
        $this->email = $this->teacher->email;
        $this->phone = $this->teacher->phone;
        $this->info = $this->teacher->info;
        $this->comment = $this->teacher->comment;

        return view('livewire.teacher-update');
    }

    public function update()
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
            $this->teacher->update($validatedData);
            $this->emit('exitUpdate');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
