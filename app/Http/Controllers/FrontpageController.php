<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;
use App\Notice;
use App\Teacher;
use App\Facility;
use App\ExtraCurricular;
use App\ExtraCurricularCategory;
use App\Gallery;

class FrontpageController extends Controller
{
    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $school = School::firstOrFail();

        return view('main')
            ->with('school', $school);
    }

    public function aboutus()
    {
        $school = School::firstOrFail();

        return view('aboutus')
            ->with('school', $school);
    }

    public function contact()
    {
        $school = School::firstOrFail();

        return view('contact')
            ->with('school', $school);
    }

    public function noticeboard()
    {
        $school = School::firstOrFail();
        $notices = Notice::all();

        return view('noticeboard')
            ->with('school', $school)
            ->with('notices', $notices);
    }

    public function teachers()
    {
        $school = School::firstOrFail();
        $teachers = Teacher::all();

        return view('teachers')
            ->with('school', $school)
            ->with('teachers', $teachers);
    }

    public function facilities()
    {
        $school = School::firstOrFail();
        $facilities = Facility::all();

        return view('facilities')
            ->with('school', $school)
            ->with('facilities', $facilities);
    }

    public function extraCurriculars()
    {
        $school = School::firstOrFail();
        $extraCurricularCategories = ExtraCurricularCategory::all();

        return view('extra-curriculars')
            ->with('school', $school)
            ->with('extraCurricularCategories', $extraCurricularCategories);
    }

    public function gallery()
    {
        $school = School::firstOrFail();
        $galleries = Gallery::all();

        return view('gallery')
            ->with('school', $school)
            ->with('galleries', $galleries);
    }
}
