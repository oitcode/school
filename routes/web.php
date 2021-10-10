<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontpageController@main')->name('main');
Route::get('/aboutus', 'FrontpageController@aboutus')->name('aboutus');
Route::get('/contact', 'FrontpageController@contact')->name('contact');
Route::get('/noticeboard', 'FrontpageController@noticeboard')->name('noticeboard');
Route::get('/teachers', 'FrontpageController@teachers')->name('teachers');
Route::get('/facilities', 'FrontpageController@facilities')->name('facilities');
Route::get('/extra_curricular', 'FrontpageController@extraCurriculars')->name('extra-curriculars');
Route::get('/gallery', 'FrontpageController@gallery')->name('gallery');
Route::get('/principals_message', 'FrontpageController@principalsMessage')->name('principals-message');
Route::get('/careers', 'FrontpageController@careers')->name('careers');
Route::get('/academic_calendar', 'FrontpageController@academicCalendar')->name('academic-calendar');
Route::get('/admission_form', 'FrontpageController@admissionForm')->name('admission-form');

/* Dashboard */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/school', 'SchoolController@index')->name('dashboard-school');
Route::get('/dashboard/notice', 'NoticeController@index')->name('dashboard-notice');
Route::get('/dashboard/teacher', 'TeacherController@index')->name('dashboard-teacher');
Route::get('/dashboard/facility', 'FacilityController@index')->name('dashboard-facility');
Route::get('/dashboard/extra_curricular', 'ExtraCurricularController@index')->name('dashboard-extra-curricular');
Route::get('/dashboard/gallery', 'GalleryController@index')->name('dashboard-gallery');
Route::get('/dashboard/principals_message', 'PrincipalsMessageController@index')->name('dashboard-principals-message');
Route::get('/dashboard/aboutus', 'AboutUsController@index')->name('dashboard-aboutus');
Route::get('/dashboard/contact_message', 'ContactMessageController@index')->name('dashboard-contact-message');
Route::get('/dashboard/mainpage', 'MainpageController@index')->name('dashboard-mainpage');
Route::get('/dashboard/social_media_link', 'SocialMediaLinkController@index')->name('dashboard-social-media-link');
Route::get('/dashboard/frontpage_theme', 'FrontpageThemeController@index')->name('dashboard-frontpage-theme');
Route::get('/dashboard/academic_session', 'AcademicSessionController@index')->name('dashboard-academic-session');
Route::get('/dashboard/class', 'OClassController@index')->name('dashboard-o-class');
Route::get('/dashboard/section', 'SectionController@index')->name('dashboard-section');
Route::get('/dashboard/student', 'StudentController@index')->name('dashboard-student');
Route::get('/dashboard/careers_resume_submission', 'CareersResumeSubmissionController@index')->name('dashboard-careers-resume-submission');
Route::get('/dashboard/vacancy', 'VacancyController@index')->name('dashboard-vacancy');
Route::get('/dashboard/admission_application', 'AdmissionApplicationController@index')->name('dashboard-admission-application');
Route::get('/dashboard/fees', 'FeesController@index')->name('dashboard-fees');


Route::get('/dashboard/memo', 'MemoController@index')->name('dashboard-memo');
Route::get('/dashboard/todo', 'TodoController@index')->name('dashboard-todo');

/* Change Password */
Route::get('/changepassword', 'ChangePasswordController@index')->name('changepassword');

/* Profile */
Route::get('/dashboard/profile', 'ProfileController@index')->name('dashboard');

/* Notice display */
Route::get('/notice/{id}', 'FrontpageController@noticeDisplay')->name('notice-display');

/* Authentication routes */
Auth::routes();
//Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
