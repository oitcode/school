<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

use App\School;

class SchoolCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $address;
    public $logo_image;
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
            'logo_image' => 'image',
            'phone' => 'required',
            'email' => 'required|email',
            'slogan' => 'required',
            'comment' => 'nullable',
        ]);

        $logo_image_path = $this->logo_image->store('school', 'public');
        $validatedData['logo_image_path'] = $logo_image_path;

        DB::beginTransaction();

        try {
            $school = School::create($validatedData);
            DB::commit();
            $this->emit('exitCreate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
