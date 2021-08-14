<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesInvoice;

class AcademicSessionPublishFeesInvoice extends Component
{
    public $term;
    public $academicSession;

    public function render()
    {
        return view('livewire.academic-session-publish-fees-invoice');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'term' => 'required',
        ]);

        foreach ($this->academicSession->oClasses as $oClass) {
            foreach ($oClass->students as $student) {
                $feesInvoice = new FeesInvoice;                

                $feesInvoice->student_id = $student->student_id;
                $feesInvoice->o_class_id = $student->oClass->o_class_id;
                $feesInvoice->type = 'monthly';
                $feesInvoice->term = $this->term;
                $feesInvoice->payment_status = 'pending';

                $feesInvoice->save();
            }
        }

        $this->emit('exitPublishFee');
    }
}
