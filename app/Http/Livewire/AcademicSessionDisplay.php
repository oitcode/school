<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionDisplay extends Component
{
    public $academicSession;

    public $publishFeesMode = false;
    public $viewFeesStructureMode = false;
    public $createAcademicSessionOClassMode = false;

    protected $listeners = [
        'exitPublishFees' => 'exitPublishFeesMode',
        'exitCreateAcademicSessionOclassMode',
    ];

    public function render()
    {
        return view('livewire.academic-session-display');
    }

    public function enterPublishFeesMode()
    {
        $this->publishFeesMode = true;
    }

    public function exitPublishFeesMode()
    {
        $this->publishFeesMode = false;
    }

    public function enterViewFeesStructureMode()
    {
        $this->viewFeesStructureMode = true;
    }

    public function exitViewFeesStructureMode()
    {
        $this->viewFeesStructureMode = false;
    }

    public function enterCreateAcademicSessionOclassMode()
    {
        $this->createAcademicSessionOClassMode = true;
    }

    public function exitCreateAcademicSessionOclassMode()
    {
        $this->createAcademicSessionOClassMode = false;
    }
}
