<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersResumeSubmissionController extends Controller
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
     * Show the dashboard contact message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.careers-resume-submission');
    }
}
