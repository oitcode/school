<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ExtraCurricularCategory;

class ExtraCurricularCategoryComponent extends Component
{
    public $extraCurricularCategories;

    public $extraCurricularCategoryId;

    public $name = '';
    public $comment = '';

    public $updateMode = false;

    public function render()
    {
        $this->extraCurricularCategories = ExtraCurricularCategory::all();

        return view('livewire.extra-curricular-category-component');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'comment' => 'nullable',
        ]);

        ExtraCurricularCategory::create($validatedData);
        $this->emit('exitCategoryCreate');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->comment = '';
    }
}
