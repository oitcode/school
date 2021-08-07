<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Facility;
use App\FacilityCategory;

class FacilityUpdate extends Component
{
    public $facility;

    public $name;
    public $facility_category_id;
    public $info;
    public $comment;

    public $facilityCategories;

    public function render()
    {
        $this->name = $this->facility->name;
        $this->facility_category_id = $this->facility->facility_category_id;
        $this->info = $this->facility->info;
        $this->comment = $this->facility->comment;

        $this->facilityCategories = FacilityCategory::all();

        return view('livewire.facility-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'facility_category_id' => 'required',
            'info' => 'required',
            'comment' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            $this->facility->update($validatedData);
            DB::commit();

            /* Todo: Should this is outside the try block? */
            $this->emit('exitUpdate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
