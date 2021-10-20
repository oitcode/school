<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionFeesStructureUpdate extends Component
{
    public $academicSession;
    public $feesStructure;

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

    public function mount()
    {
        $this->feesStructure = $this->academicSession->feesStructure;
        $this->nursery = $this->feesStructure->nursery;
        $this->lkg = $this->feesStructure->lkg;
        $this->ukg = $this->feesStructure->ukg;
        $this->one = $this->feesStructure->one;
        $this->two = $this->feesStructure->two;
        $this->three = $this->feesStructure->three;
        $this->four = $this->feesStructure->four;
        $this->five = $this->feesStructure->five;
        $this->six = $this->feesStructure->six;
        $this->seven = $this->feesStructure->seven;
        $this->eight = $this->feesStructure->eight;
        $this->nine = $this->feesStructure->nine;
        $this->ten = $this->feesStructure->ten;
    }

    public function render()
    {
        return view('livewire.academic-session-fees-structure-update');
    }

    public function update()
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

        $this->feesStructure->update($validatedData);
        $this->emit('exitFeesStructureUpdateMode');
    }
}
