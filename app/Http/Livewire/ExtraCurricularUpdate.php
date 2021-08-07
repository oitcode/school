<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

use App\ExtraCurricularCategory;
use App\ExtraCurricular;

class ExtraCurricularUpdate extends Component
{
    use WithFileUploads;

    public $extraCurricularCategories;

    public $extraCurricular;

    public $name;
    public $extra_curricular_category_id;
    public $description;
    public $comment;
    public $image;

    public function render()
    {
        $this->extraCurricularCategories = ExtraCurricularCategory::all();

        $this->name = $this->extraCurricular->name;
        $this->extra_curricular_category_id = $this->extraCurricular->extra_curricular_category_id;
        $this->description = $this->extraCurricular->description;
        $this->comment = $this->extraCurricular->comment;

        return view('livewire.extra-curricular-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'extra_curricular_category_id' => 'required',
            'description' => 'required',
            'comment' => 'nullable',

            'image' => 'nullable|image'
        ]);

        if ($this->image !== null) {
            $image_path = $this->image->store('extra-curriculars', 'public');
            $validatedData['image_path'] = $image_path;
        }

        DB::beginTransaction();

        try {
            $this->extraCurricular->update($validatedData);
            DB::commit();

            /* Todo: Should this is outside the try block? */
            $this->emit('exitUpdate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
