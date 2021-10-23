<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesPayment;

class StudentFeesPaymentCreate extends Component
{
    /* Invoice against which payment is received. */
    public $feesInvoice;

    public $submitted_by;
    public $payment_date;
    public $amount;

    public function render()
    {
        return view('livewire.student-fees-payment-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'submitted_by' => 'required',
            'amount' => 'required',
        ]);

        $validatedData['payment_date'] = date('Y-m-d');
        $validatedData['fees_invoice_id'] = $this->feesInvoice->fees_invoice_id;

        $pendingAmount = $this->feesInvoice->getPendingAmount();

        /* Update fees invoice payment status */
        if ($validatedData['amount'] < $pendingAmount) {
            $feesPayment = FeesPayment::create($validatedData);
            $this->feesInvoice->payment_status = 'partially_paid';
        } else {
            $validatedData['amount'] = $pendingAmount;
            $feesPayment = FeesPayment::create($validatedData);
            $this->feesInvoice->payment_status = 'paid';
        }

        $this->feesInvoice->save();


        $this->emit('exitStudentFeesPaymentCreateMode');
    }
}
