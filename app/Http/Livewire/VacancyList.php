<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Vacancy;

class VacancyList extends Component
{
    public $vacancies;

    public function render()
    {
        $this->vacancies = Vacancy::all();

        return view('livewire.vacancy-list');
    }
}
