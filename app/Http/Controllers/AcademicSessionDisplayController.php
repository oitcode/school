<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AcademicSession;

class AcademicSessionDisplayController extends Controller
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
     * Show the dashboard aboutus page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->academicSession = AcademicSession::where('status', 'current')->first();

        return view('dashboard.academic-session-display');
    }
}
