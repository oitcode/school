<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesStructure;

class AcademicSessionFeesStructureCreate extends Component
{
    public $academicSessions;

    public $academicSession;

    public $nursery;
    public $lkg;
    public $ukg;
    public $one;
    public $two;
    public $three;
    public $four;
    public $five;
    public $six;
    public $seven;
    public $eight;
    public $nine;
    public $ten;

    public function render()
    {
        return view('livewire.academic-session-fees-structure-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'nursery' => 'required|integer',
            'lkg' => 'required|integer',
            'ukg' => 'required|integer',
            'one' => 'required|integer',
            'two' => 'required|integer',
            'three' => 'required|integer',
            'four' => 'required|integer',
            'five' => 'required|integer',
            'six' => 'required|integer',
            'seven' => 'required|integer',
            'eight' => 'required|integer',
            'nine' => 'required|integer',
            'ten' => 'required|integer',
        ]);

        $validatedData['academic_session_id'] = $this->academicSession->academic_session_id;

        FeesStructure::create($validatedData);
        $this->emit('exitFeesStructureCreateMode');
    }
}
