<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AcademicSession;
use App\Teacher;

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
        $academicSession = AcademicSession::where('status', 'current')->first();
        $teachers = Teacher::all();

        return view('dashboard')
            ->with('teachers', $teachers)
            ->with('academicSession', $academicSession);
    }
}
