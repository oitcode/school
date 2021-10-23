<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesInvoice;

class StudentFeesComponent extends Component
{
    public $student;

    public $payingFeesInvoice;
    public $displayingFeesPaymentInvoice;

    public $studentFeesPaymentCreateMode = false;
    public $studentPaymentReceiveMode = false;
    public $feesPaymentDisplayMode = false;

    protected $listeners = [
        'exitStudentFeesPaymentCreateMode',
        'exitStudentPaymentReceiveMode',

        'studentPaymentMade',
        'enterFeesPaymentDisplayMode',
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

    public function enterStudentPaymentReceiveMode()
    {
        $this->studentPaymentReceiveMode = true;
    }

    public function exitStudentPaymentReceiveMode()
    {
        $this->studentPaymentReceiveMode = false;
    }

    public function studentPaymentMade($amountRemaining)
    {
        $this->exitStudentPaymentReceiveMode();
        session()->flash('message', 'Payment Made. Return amount: ' . $amountRemaining);
    }

    public function enterFeesPaymentDisplayMode(FeesInvoice $feesInvoice)
    {
        $this->displayingFeesPaymentInvoice = $feesInvoice;
        $this->feesPaymentDisplayMode = true;      
    }

    public function exitFeesPaymentDisplayMode()
    {
        $this->displayingFeesPaymentInvoice = null;
        $this->feesPaymentDisplayMode = false;
    }
}
