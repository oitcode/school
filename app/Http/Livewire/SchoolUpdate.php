<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\School;

class SchoolUpdate extends Component
{
    public $school;

    public $name;
    public $address;
    public $phone;
    public $email;
    public $slogan;
    public $comment;

    public function render()
    {
        $this->name = $this->school->name;
        $this->address = $this->school->address;
        $this->phone = $this->school->phone;
        $this->email = $this->school->email;
        $this->slogan = $this->school->slogan;
        $this->comment = $this->school->comment;

        return view('livewire.school-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'slogan' => 'required',
            'comment' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            $this->school->update($validatedData);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
