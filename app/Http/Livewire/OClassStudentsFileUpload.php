<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use App\Student;
use App\Guardian;
use App\GuardianStudent;

class OClassStudentsFileUpload extends Component
{
    use WithFileUploads;

    public $o_class_id;

    public $students_file;

    public $startMode = true;
    public $previewMode = false;

    public $lines = [];
    public $totLines;
    public $filePath;

    public function render()
    {
        return view('livewire.o-class-students-file-upload');
    }

    public function preview()
    {
        $validatedData = $this->validate([
            'students_file' => 'required|file|max:1024',
        ]);

        /*
         * TODO: Can be done without storing the file?
         */

        $this->filePath = $this->students_file->store('csvImports');
        $contents = Storage::get($this->filePath);

        $lines = explode("\n", $contents);

        /*
         * TODO:
         *
         * For some reason last line will be of one char. 
         * Dont know why. 
         *
         * Poping it out of array to be safe.
         *
         * Fix it!
         *
         */
        array_pop($lines);

        $this->totLines = count($lines);

        foreach ($lines as $line) {
            $this->lines[] = explode(',', $line);
        }

        $this->enterPreviewMode();
    }

    public function enterStartMode()
    {
        $this->startMode = true;
    }

    public function exitStartMode()
    {
        $this->startMode = false;
    }

    public function enterPreviewMode()
    {
        $this->exitStartMode();
        $this->previewMode = true;
    }

    public function exitPreviewMode()
    {
        $this->previewMode = false;
    }

    public function importFromFile()
    {
        foreach ($this->lines as $line) {
            DB::beginTransaction();

            try {
                $student = new Student;

                $student->name = $line[0];
                $student->email = $line[1];
                $student->phone = $line[2];
                $student->address = $line[3];
                $student->o_class_id = $this->o_class_id;
                $student->save();

                $guardian = new Guardian;

                $guardian->name = $line[4];
                $guardian->email = $line[5];
                $guardian->phone = $line[6];
                $guardian->address = $line[7];
                $guardian->save();

                $guardianStudent = new GuardianStudent;

                $guardianStudent->guardian_id = $guardian->guardian_id;
                $guardianStudent->student_id = $student->student_id;
                $guardianStudent->type = 'primary';
                $guardianStudent->save();

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
            }
        }

        /* Delete the file */
        Storage::delete($this->filePath);

        $this->emit('exitUploadStudentsFile');
    }
}
