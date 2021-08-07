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
use App\PrincipalsMessage;
use App\AboutUs;
use App\MainpageContent;

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
        $mainpageContents = MainpageContent::all();

        return view('main')
            ->with('school', $school)
            ->with('mainpageContents', $mainpageContents);
    }

    public function aboutus()
    {
        $school = School::firstOrFail();

        $aboutUs = null;

        if (AboutUs::count() > 0) {
            $aboutUs = AboutUs::firstOrFail();
        }

        return view('aboutus')
            ->with('school', $school)
            ->with('aboutUs', $aboutUs);
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

    public function principalsMessage()
    {
        $school = School::firstOrFail();
        $principalsMessage = null;

        if (PrincipalsMessage::count() > 0) {
            $principalsMessage = PrincipalsMessage::firstOrFail();
        }

        return view('principals-message')
            ->with('school', $school)
            ->with('principalsMessage', $principalsMessage);
    }

    public function noticeDisplay($id)
    {
        $school = School::firstOrFail();
        $notice = Notice::findOrFail($id);

        return view('notice-display')
            ->with('school', $school)
            ->with('notice', $notice);
    }
}
