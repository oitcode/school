<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VacancyComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
    ];

    public function render()
    {
        return view('livewire.vacancy-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }
}
