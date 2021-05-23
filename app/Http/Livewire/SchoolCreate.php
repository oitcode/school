<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\School;

class SchoolCreate extends Component
{
    public $name;
    public $address;
    public $phone;
    public $email;
    public $slogan;
    public $comment;

    public function render()
    {
        return view('livewire.school-create');
    }

    public function store()
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
            $school = School::create($validatedData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
