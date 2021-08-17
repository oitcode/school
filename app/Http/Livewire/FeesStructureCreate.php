<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\AcademicSession;
use App\FeesStructure;

class FeesStructureCreate extends Component
{
    public $academicSessions;

    public $academic_session_id;

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
        $this->academicSessions = AcademicSession::all();

        return view('livewire.fees-structure-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'academic_session_id' => 'required',

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

        FeesStructure::create($validatedData);
        $this->emit('exitCreateFeesStructureMode');
    }
}
