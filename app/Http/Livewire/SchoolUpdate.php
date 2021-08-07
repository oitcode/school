<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

use App\School;

class SchoolUpdate extends Component
{
    use WithFileUploads;

    public $school;

    public $name;
    public $address;
    public $logo_image;
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
            'logo_image' => 'nullable|image',
            'comment' => 'nullable',
        ]);

        if ($this->logo_image !== null) {
            $logo_image_path = $this->logo_image->store('school', 'public');
            $validatedData['logo_image_path'] = $logo_image_path;
        }

        DB::beginTransaction();

        try {
            $this->school->update($validatedData);

            DB::commit();
            $this->emit('exitUpdate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
