<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Student;
use App\SectionStudent;
use App\FeesInvoice;

class StudentCreate extends Component
{
    public $native = true;

    public $name;
    public $email;
    public $phone;
    public $address;
    public $starting_pending_balance;

    public $section_id;


    public function render()
    {
        return view('livewire.student-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'section_id' => 'required',
            'starting_pending_balance' => 'nullable|integer',
        ]);

        DB::beginTransaction();

        try {
            $student = Student::create($validatedData);

            SectionStudent::create([
                'section_id' => $this->section_id,
                'student_id' => $student->student_id,
                'status' => 'current',
            ]);

            /* Create starting pending balance if needed */
            if ($validatedData['starting_pending_balance']) {
                $feesInvoice = new FeesInvoice;                

                $feesInvoice->student_id = $student->student_id;
                $feesInvoice->section_id = $this->section_id;
                $feesInvoice->type = 'product_live_pending';
                $feesInvoice->amount = $this->starting_pending_balance;
                $feesInvoice->payment_status = 'pending';
                $feesInvoice->date = date('Y-m-d');

                $feesInvoice->save();
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $this->emit('exitCreateStudent');
        $this->emit('exitCreate');
    }
}
