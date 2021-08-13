<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Vacancy;

class VacancyCreate extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.vacancy-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $validatedData['status'] = 'open';

        Vacancy::create($validatedData);

        $this->emit('exitCreate');
    }
}
