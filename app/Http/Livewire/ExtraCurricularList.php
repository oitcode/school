<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\ExtraCurricular;

class ExtraCurricularList extends Component
{
    public $extraCurriculars = null;

    protected $listeners = [
        'extraCurricularAdded' => 'render',
        'refreshExtraCurricularList' => 'render',
        'updateList' => 'render',
    ];
    public function render()
    {
        $this->extraCurriculars = ExtraCurricular::all();

        return view('livewire.extra-curricular-list');
    }
}
