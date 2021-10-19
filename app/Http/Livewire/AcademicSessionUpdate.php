<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;

class AcademicSessionUpdate extends Component
{
    public $academicSession;

    public $name;
    public $status;

    public function mount()
    {
        $this->name = $this->academicSession->name;
        $this->status = $this->academicSession->status;
    }

    public function render()
    {
        return view('livewire.academic-session-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => [
                'required',
                Rule::unique('academic_session', 'name')->ignore($this->academicSession->name, 'name'),
            ],
            'status' => 'required',
        ]);

        /* TODO: Make sure only one academic session is current. */

        $this->academicSession->update($validatedData);
        $this->emit('exitUpdate');
    }
}
