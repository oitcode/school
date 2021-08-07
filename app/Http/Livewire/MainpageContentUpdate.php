<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

use App\MainpageContent;

class MainpageContentUpdate extends Component
{
    use WithFileUploads;

    public $mainpageContent;

    public $body;
    public $image;

    public function render()
    {
        $this->body = $this->mainpageContent->body;

        return view('livewire.mainpage-content-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'body' => 'required',
            'image' => 'nullable|image'
        ]);

        if ($this->image !== null) {
            $image_path = $this->image->store('mainpage-content', 'public');
            $validatedData['image_path'] = $image_path;
        }

        DB::beginTransaction();

        try {
            $this->mainpageContent->update($validatedData);
            DB::commit();
            $this->emit('exitUpdate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
