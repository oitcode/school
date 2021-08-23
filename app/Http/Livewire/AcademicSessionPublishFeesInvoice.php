<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesStructure;
use App\FeesTerm;
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


        /* Check if this session as a fees structure */
        if (!$this->academicSession->feesStructure) {
            dd('foo');
        }

        /* Create fees term */
        $feesTerm = new FeesTerm;
        $feesTerm->term = $validatedData['term'];
        $feesTerm->academic_session_id = $this->academicSession->academic_session_id;
        $feesTerm->save();

        /* Make fees invoice against all students */
        foreach ($this->academicSession->oClasses as $oClass) {
            foreach ($oClass->sections as $section) {
                foreach ($section->students as $student) {
                    $feesInvoice = new FeesInvoice;                

                    $feesInvoice->student_id = $student->student_id;
                    $feesInvoice->section_id = $section->section_id;
                    $feesInvoice->fees_term_id = $feesTerm->fees_term_id;
                    $feesInvoice->type = 'monthly';

                    if (strtolower($oClass->name) == 'nursery') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->nursery;
                    } elseif (strtolower($oClass->name) == 'lkg') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->lkg;
                    } elseif (strtolower($oClass->name) == 'ukg') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->ukg;
                    } elseif (strtolower($oClass->name) == 'one') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->one;
                    } elseif (strtolower($oClass->name) == 'two') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->two;
                    } elseif (strtolower($oClass->name) == 'three') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->three;
                    } elseif (strtolower($oClass->name) == 'four') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->four;
                    } elseif (strtolower($oClass->name) == 'five') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->five;
                    } elseif (strtolower($oClass->name) == 'six') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->six;
                    } elseif (strtolower($oClass->name) == 'seven') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->seven;
                    } elseif (strtolower($oClass->name) == 'eight') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->eight;
                    } elseif (strtolower($oClass->name) == 'nine') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->nine;
                    } elseif (strtolower($oClass->name) == 'ten') {
                        $feesInvoice->amount = $this->academicSession->feesStructure->ten;
                    } else {
                      dd('Whoopsie');
                    }

                    $feesInvoice->payment_status = 'pending';
                    $feesInvoice->date = date('Y-m-d');

                    $feesInvoice->save();
                }
            }
        }

        $this->emit('exitPublishFee');
    }
}
