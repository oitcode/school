<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AcademicSessionDisplay extends Component
{
    public $academicSession;

    public $publishFeesMode = false;
    public $viewFeesStructureMode = false;
    public $createAcademicSessionOClassMode = false;
    public $createAcademicSessionFeesStructureMode = false;
    public $academicSessionFeesStructureMode = false;

    public $createFeesStructureMode = false;

    protected $listeners = [
        'exitPublishFees' => 'exitPublishFeesMode',
        'exitCreateAcademicSessionOclassMode',
        'exitCreateAcademicSessionFeesStructureMode',
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

    public function enterCreateAcademicSessionFeesStructureMode()
    {
        $this->createAcademicSessionFeesStructureMode = true;
    }

    public function exitCreateAcademicSessionFeesStructureMode()
    {
        $this->createAcademicSessionFeesStructureMode = false;
    }
}
