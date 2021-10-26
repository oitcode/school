<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartExpenseByCategory extends Component
{
    public $start_date;
    public $end_date;

    public $innerMode = false;

    public function render()
    {
        return view('livewire.chart-expense-by-category');
    }

    public function setQueryDates()
    {
        $validatedData = $this->validate([
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
        ]);

        $this->start_date = $validatedData['start_date'];
        $this->end_date = $validatedData['end_date'];

        $this->enterInnerMode();
    }

    public function enterInnerMode()
    {
        $this->innerMode = true;
    }

    public function endInnerMode()
    {
        $this->innerMode = false;
    }
}
