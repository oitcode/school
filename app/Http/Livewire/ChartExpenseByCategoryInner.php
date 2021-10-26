<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChartExpenseByCategoryInner extends Component
{
    public $start_date;
    public $end_date;

    public function render()
    {
        return view('livewire.chart-expense-by-category-inner');
    }
}
