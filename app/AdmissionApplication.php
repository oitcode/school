<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionApplication extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admission_application';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'admission_application_id';

    protected $fillable = [
        'academic_session_id',
        'student_name', 'student_email', 'student_phone', 'student_address',
        'primary_guardian_name', 'primary_guardian_email', 'primary_guardian_phone', 'primary_guardian_address',
        'secondary_guardian_name', 'secondary_guardian_email', 'secondary_guardian_phone', 'secondary_guardian_address',
        'o_class',
        'resume_file_path', 'image_path',
        'old_school_name', 'old_school_location', 'old_schol_class',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * academic_session table.
     *
     */
    public function gallery()
    {
        return $this->belongsTo('App\AcademicSession', 'academic_session_id', 'academic_session_id');
    }
}
