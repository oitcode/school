<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesInvoice;

class StudentFeesComponent extends Component
{
    public $student;

    public $payingFeesInvoice;

    public $studentFeesPaymentCreateMode = false;

    protected $listeners = [
        'exitStudentFeesPaymentCreateMode',
    ];

    public function render()
    {
        return view('livewire.student-fees-component');
    }

    public function enterStudentFeesPaymentCreateMode(FeesInvoice $feesInvoice)
    {
        $this->payingFeesInvoice = $feesInvoice;
        $this->studentFeesPaymentCreateMode = true;
    }

    public function exitStudentFeesPaymentCreateMode()
    {
        $this->payingFeesInvoice = null;
        $this->studentFeesPaymentCreateMode = false;
    }
}
