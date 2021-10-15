<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AcademicSession;
use App\Teacher;
use App\School;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $school = School::first();
        $academicSession = AcademicSession::where('status', 'current')->first();
        $teachers = Teacher::all();

        return view('dashboard')
            ->with('school', $school)
            ->with('academicSession', $academicSession);
    }
}
