<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageThemeController extends Controller
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
     * Show the dashboard extra curricular page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.frontpage-theme');
    }
}
