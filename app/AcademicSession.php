<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicSession extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academic_session';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'academic_session_id';

    protected $fillable = [
        'name',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * o_class table.
     *
     */
    public function oClasses()
    {
        return $this->hasMany('App\OClass', 'academic_session_id', 'academic_session_id');
    }

    /*
     * admission_application table.
     *
     */
    public function admissionApplications()
    {
        return $this->hasMany('App\AdmissionApplication', 'academic_session_id', 'academic_session_id');
    }
}
