<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\FeesInvoice;

class StudentDisplay extends Component
{
    public $student;

    public $addGuardianMode = false;
    public $displayFeesMode = true;
    public $studentFeesPaymentCreateMode = false;
    public $sendSmsMode = false;

    public $payingFeesInvoice;

    public $studentFeesTab = false;

    protected $listeners = [
        'exitAddGuardian' => 'exitAddGuardianMode',
        'exitStudentFeesPaymentCreateMode',
        'exitSendSmsMode',
    ];

    public function render()
    {
        return view('livewire.student-display');
    }

    public function enterAddGuardianMode()
    {
        $this->addGuardianMode = true;
    }

    public function exitAddGuardianMode()
    {
        $this->addGuardianMode = false;
    }

    public function hideFees()
    {
        $this->exitDisplayFeesMode();
    }

    public function enterDisplayFeesMode()
    {
        $this->displayFeesMode = true;
    }

    public function exitDisplayFeesMode()
    {
        $this->displayFeesMode = false;
    }

    public function enterStudentFeesPaymentCreateMode(FeesInvoice $feesInvoice)
    {
        $this->payingFeesInvoice = $feesInvoice;
        $this->studentFeesPaymentCreateMode = true;
    }

    public function exitStudentFeesPaymentCreateMode()
    {
        $this->studentFeesPaymentCreateMode = false;
    }

    public function selectStudentFeesTab()
    {
        $this->studentFeesTab = true;
    }

    public function deselectStudentFeesTab()
    {
        $this->studentFeesTab = false;
    }

    public function enterSendSmsMode()
    {
        $this->sendSmsMode = true;
    }

    public function exitSendSmsMode()
    {
        $this->sendSmsMode = false;
    }
}
