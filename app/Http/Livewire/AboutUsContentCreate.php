<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

use App\AboutUsContent;

class AboutUsContentCreate extends Component
{
    use WithFileUploads;

    public $body;
    public $image;

    public function render()
    {
        return view('livewire.about-us-content-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'body' => 'required',
            'image' => 'required|image'
        ]);

        $image_path = $this->image->store('mainpage-content', 'public');
        $validatedData['image_path'] = $image_path;

        DB::beginTransaction();

        try {
            $aboutUsContent = AboutUsContent::create($validatedData);
            DB::commit();
            $this->emit('exitCreate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
