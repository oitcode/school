<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\School;

class StudentFeesPaymentDisplay extends Component
{
    public $school;
    public $feesInvoice;
    public $feesPayments;
    public $student;

    public function render()
    {
        $this->school = School::first();
        $this->feesPayments = $this->feesInvoice->feesPayments;
        $this->student = $this->feesInvoice->student;

        return view('livewire.student-fees-payment-display');
    }
}
