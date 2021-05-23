<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\FacilityCategory;
use App\Facility;

class FacilityCreate extends Component
{
    public $facilityCategories = null;

    public $name;
    public $facility_category_id;
    public $info;
    public $comment;

    public function render()
    {
        $this->facilityCategories = FacilityCategory::all();

        return view('livewire.facility-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'facility_category_id' => 'required',
            'info' => 'required',
            'comment' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            $facility = Facility::create($validatedData);
            DB::commit();

            /* Todo: Should this is outside the try block? */
            $this->emit('facilityAdded');
            $this->emit('toggleFacilityCreateModal');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
