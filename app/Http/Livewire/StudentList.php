<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Student;
use App\AcademicSession;

class StudentList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selectedAcademicSession = null;

    public $filterDisplay = true;

    public $withClass = null;

    /* Search items */
    public $searchData = [
        'studentName' => null,
        'academicSessionId' => null,
        'oClassId' => null,
        'parentName' => null,
    ];

    public $academicSessions;
    public $oClasses;

    public $students;

    public function mount()
    {
        $this->students = Student::limit(10)->get();
    }

    public function render()
    {
        $this->academicSessions = AcademicSession::all();

        return view('livewire.student-list');
    }

    public function updateSelectedAcademicSession()
    {
        $this->selectedAcademicSession = AcademicSession::findOrFail($this->searchData['academicSessionId']);
    }

    public function searchByStudentName()
    {
        $this->students = Student::where('name', 'like', '%'.$this->search_name.'%')->get();
    }

    public function search()
    {
        /* Result */
        $students = new Student;

        /* Retreive no records if empty search */
        $emptySearch = true;
        foreach ($this->searchData as $key => $value) {
            if ($value !== null && $value != '') {
              $emptySearch = false;
              break;
            }
        }

        if ($emptySearch) {
            $this->students = null;
            return;
        } 

        /* Apply search filter */

        /* Filter by student name */
        if ($this->searchData['studentName']) {
            $students = $students->where('name', 'like', '%'.$this->searchData['studentName'].'%');
        }

        /* Filter by academic session */
        if ($this->searchData['academicSessionId'] && $this->searchData['academicSessionId'] != '---') {
            // TODO
            ;
        }

        /* Filter by class */
        if ($this->searchData['oClassId'] &&  $this->searchData['oClassId'] != '---') {
            $students = $students->where('o_class_id', $this->searchData['oClassId']);
        }

        /* Filter by parent name  */
        if ($this->searchData['parentName'] &&  $this->searchData['parentName'] != '') {
            $students = $students->whereHas('guardians', function($q) {
                $q->where('name', 'like', '%'.$this->searchData['parentName'].'%');
            });
        }

        $this->students = $students->get();
    }

    public function showFilter()
    {
        $this->filterDisplay = true;
    }

    public function hideFilter()
    {
        $this->filterDisplay = false;
    }
}
