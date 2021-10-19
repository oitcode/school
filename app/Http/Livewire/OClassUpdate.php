<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OClassUpdate extends Component
{
    public $updatingOClass;
    public $name;

    public function mount()
    {
        $this->name = $this->updatingOClass->name;
    }

    public function render()
    {
        return view('livewire.o-class-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        $this->updatingOClass->update($validatedData);

        $this->emit('exitUpdate');
    }
}
