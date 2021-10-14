<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesPayment;

class StudentPaymentCreate extends Component
{
    public $student;

    public $amount;
    public $deposited_by;

    public function render()
    {
        return view('livewire.student-payment-create');
    }

    public function receivePayment()
    {
        $validatedData = $this->validate([
            'amount' => 'required|integer',
            'deposited_by' => 'required',
        ]);

        $amountRemaining = $this->amount;

        /* Check if pending fees invoice to pay */
        foreach ($this->student->getPendingFeesInvoices() as $feesInvoice) {
            /* Stop if no amount remaining. */
            if ($amountRemaining <= 0) {
                break;
            }

            $amountRemaining = $this->receiveFeesInvoicePayment($feesInvoice, $amountRemaining, $this->deposited_by);
        }

        /* TODO */
        /* If amount still remaining ask to return or keep the balance */

        $this->emitUp('studentPaymentMade');
        // session()->flash('message', 'Payments created. Return: ' . $amountRemaining);
    }

    public function receiveFeesInvoicePayment($feesInvoice, $amountAvailable, $depositedBy)
    {
        $retval = 0;

        $feesPayment = new FeesPayment;

        $feesPayment->fees_invoice_id = $feesInvoice->fees_invoice_id;
        $feesPayment->payment_date = date('Y-m-d');
        $feesPayment->submitted_by = $depositedBy;

        /* If amount available is not enough for full payment. */
        if ($amountAvailable < $feesInvoice->getPendingAmount()) {
            $feesPayment->amount = $amountAvailable;
            $feesInvoice->payment_status = 'partially_paid';
        } else {
            /* Enough amount available. */
            $feesPayment->amount = $feesInvoice->getPendingAmount();
            $feesInvoice->payment_status = 'paid';

            $retval = $amountAvailable - $feesInvoice->getPendingAmount();
        }

        $feesPayment->save();
        $feesInvoice->save();

        return $retval;
    }
}
