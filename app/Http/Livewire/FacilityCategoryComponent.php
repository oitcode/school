<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FacilityCategory;

class FacilityCategoryComponent extends Component
{
    public $facilityCategories;

    public $facilityCategoryId;

    public $title = '';
    public $comment = '';

    public $updateMode = false;

    public function render()
    {
        $this->facilityCategories = FacilityCategory::all();

        return view('livewire.facility-category-component');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'comment' => 'nullable',
        ]);

        FacilityCategory::create($validatedData);

        $this->emit('exitCategoryCreate');
    }

    public function edit($id)
    {
        $facilityCategory = FacilityCategory::findOrFail($id);

        $this->facilityCategoryId = $id;
        $this->title = $facilityCategory->title;
        $this->comment = $facilityCategory->comment;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'comment' => 'nullable',
        ]);


        $facilityCategory = FacilityCategory::find($this->facilityCategoryId);
        $facilityCategory->update([
            'title' => $this->title,
            'comment' => $this->comment,
        ]);

        $this->updateMode = false;
        session()->flash('message', 'Facility Category Updated Successfully.');
        $this->resetInputFields();
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->comment = '';
    }

    public function delete($id)
    {
        FacilityCategory::find($id)->delete();
        session()->flash('message', 'Facility Category Deleted Successfully.');
    }
}
