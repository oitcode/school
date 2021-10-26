<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

use App\AcademicSession;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $academicSession = AcademicSession::find($request['academicSession']);
        $oClasses = $academicSession->oClasses;
        $students = [];

        foreach ($oClasses as $oClass) {
            $students[] = $oClass->getTotalStudents();
        }

        return Chartisan::build()
            ->labels([
                'Nursery', 'LKG', 'UKG',
                'One', 'Two', 'Three', 'Four', 'Five',
                'Six', 'Seven', 'Eight', 'Nine', 'Ten',
            ])
            ->dataset('Number of students', $students);
            //->dataset('Foo', [10,15,20,25,20,15,10,15,20,25,30,45,15]);
    }
}
