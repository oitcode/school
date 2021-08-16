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
use App\SocialMediaLink;
use App\FrontpageTheme;
use App\Vacancy;

class FrontpageController extends Controller
{
    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        $school = School::first();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();

        if (!$school) {
            return '
              <div style="text-align: center;">
                <h1><span style="color:green;">O</span>IT <span style="font-size:0.5em; color:green;">school</span> CM<span style="color:green;">S</span></h1>
                <h2><span style="color:green;">S</span>chool is for educatio<span style="color:green;">n</span></h2>
                <h3><span style="color:green;">E</span>ducation is for knowledg<span style="color:green;">e</span></h3>
                <h4><span style="color:green;">K</span>nowledge makes you wis<span style="color:green;">e</span></h4>
                <h5><span style="color:green;">H</span>ave a good da<span style="color:green;">y</span></h5>
                <h5><span style="color:green;">B</span>y<span style="color:green;">e</span></h5>
              </div>
            ';
        }

        $mainpageContents = MainpageContent::all();

        return view('main')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('mainpageContents', $mainpageContents);
    }

    public function aboutus()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();

        $aboutUs = null;

        if (AboutUs::count() > 0) {
            $aboutUs = AboutUs::firstOrFail();
        }

        return view('aboutus')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('aboutUs', $aboutUs);
    }

    public function contact()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();

        return view('contact')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks);
    }

    public function noticeboard()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $notices = Notice::all();

        return view('noticeboard')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('notices', $notices);
    }

    public function teachers()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $teachers = Teacher::all();

        return view('teachers')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('teachers', $teachers);
    }

    public function facilities()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $facilities = Facility::all();

        return view('facilities')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('facilities', $facilities);
    }

    public function extraCurriculars()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $extraCurricularCategories = ExtraCurricularCategory::all();

        return view('extra-curriculars')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('extraCurricularCategories', $extraCurricularCategories);
    }

    public function gallery()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $galleries = Gallery::all();

        return view('gallery')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('galleries', $galleries);
    }

    public function principalsMessage()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $principalsMessage = null;

        if (PrincipalsMessage::count() > 0) {
            $principalsMessage = PrincipalsMessage::firstOrFail();
        }

        return view('principals-message')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('principalsMessage', $principalsMessage);
    }

    public function noticeDisplay($id)
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $notice = Notice::findOrFail($id);

        return view('notice-display')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('notice', $notice);
    }

    public function careers()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();
        $vacancies = Vacancy::all();

        return view('careers')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks)
            ->with('vacancies', $vacancies);
    }

    public function academicCalendar()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();

        return view('academic-calendar')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks);
    }

    public function admissionForm()
    {
        $school = School::firstOrFail();
        $frontpageTheme = FrontpageTheme::first();
        $socialMediaLinks = SocialMediaLink::all();

        return view('admission-application')
            ->with('school', $school)
            ->with('frontpageTheme', $frontpageTheme)
            ->with('socialMediaLinks', $socialMediaLinks);
    }
}
