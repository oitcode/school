<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

use App\Expense;
use App\ExpenseCategory;

class ExpenseByCategory extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $startDate = $request['startDate'];
        $endDate = $request['endDate'];

        $expenseCategories = ExpenseCategory::all();

        $expenseCategoryNames = [];
        $expenseCategoryTotals = []; 

        foreach ($expenseCategories as $expenseCategory) {
            $expenseCategoryNames[] = $expenseCategory->name;
            $expenseCategoryTotals[] = $expenseCategory->getExpensesTotal($startDate, $endDate);
        }

        return Chartisan::build()
            ->labels($expenseCategoryNames)
            ->dataset('Total', $expenseCategoryTotals);
    }
}
