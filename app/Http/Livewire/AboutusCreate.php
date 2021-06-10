<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

use App\AboutUs;

class AboutusCreate extends Component
{
    use WithFileUploads;

    public $paragraph_1;
    public $paragraph_2;
    public $paragraph_3;

    public $image1 = null;
    public $image2 = null;
    public $image3 = null;

    public function render()
    {
        return view('livewire.aboutus-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'paragraph_1' => 'required',
            'image1' => 'required|image',

            'paragraph_2' => 'nullable',
            'image2' => 'nullable|image',

            'paragraph_3' => 'nullable',
            'image3' => 'nullable|image',
        ]);

        DB::beginTransaction();

        try {
            $imagePath1 = $this->image1->store('about_us', 'public');
            $validatedData['image_path_1'] = $imagePath1;

            if ($this->image2) {
                $imagePath2 = $this->image2->store('about_us', 'public');
                $validatedData['image_path_2'] = $imagePath2;
            }

            if ($this->image3) {
                $imagePath3 = $this->image3->store('about_us', 'public');
                $validatedData['image_path_3'] = $imagePath3;
            }

            AboutUs::create($validatedData);

            DB::commit();

            /* Todo: Should this is outside the try block? */
            $this->emit('aboutusAdded');
        } catch (\Exception $e) {
            $this->resetInputFields();
            DB::rollback();
        }
    }

    public function resetInputFields()
    {
        $this->paragraph_1 = "";
        $this->paragraph_2 = "";
        $this->paragraph_3 = "";

        $this->image1 = null;
        $this->image2 = null;
        $this->image3 = null;
    }
}
