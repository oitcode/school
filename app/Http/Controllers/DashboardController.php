<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AcademicSession;

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

        return view('dashboard')
            ->with('academicSession', $academicSession);
    }
}
