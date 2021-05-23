<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

use App\ExtraCurricularCategory;
use App\ExtraCurricular;

class ExtraCurricularCreate extends Component
{
    use WithFileUploads;

    public $extraCurricularCategories;

    public $name;
    public $extra_curricular_category_id;
    public $description;
    public $comment;
    public $image;

    public function render()
    {
        $this->extraCurricularCategories = ExtraCurricularCategory::all();

        return view('livewire.extra-curricular-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'extra_curricular_category_id' => 'required',
            'description' => 'required',
            'comment' => 'nullable',

            'image' => 'image'
        ]);

        $image_path = $this->image->store('extra-curriculars', 'public');
        $validatedData['image_path'] = $image_path;

        DB::beginTransaction();

        try {
            $extraCurricular = ExtraCurricular::create($validatedData);
            DB::commit();

            /* Todo: Should this is outside the try block? */
            $this->emit('extraCurricularAdded');
            $this->emit('toggleExtraCurricularCreateModal');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
