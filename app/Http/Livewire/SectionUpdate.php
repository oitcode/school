<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SectionUpdate extends Component
{
    public $updatingSection;
    public $name;

    public function mount()
    {
        $this->name = $this->updatingSection->name;
    }

    public function render()
    {
        return view('livewire.section-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        $this->updatingSection->update($validatedData);
        $this->emit('exitUpdate');
    }
}
