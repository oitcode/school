<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Section;

class OClassSectionCreate extends Component
{
    public $oClass;

    public $name;

    public function render()
    {
        return view('livewire.o-class-section-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        $section = new Section;

        $section->name = $validatedData['name'];
        $section->o_class_id = $this->oClass->o_class_id;

        $section->save();

        $this->emit('exitCreateOClassSectionMode');
    }
}
