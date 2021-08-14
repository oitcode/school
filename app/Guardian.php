<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guardian';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'guardian_id';

    protected $fillable = [
        'name', 'email', 'phone', 'address',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * student table.
     *
     */
    public function students()
    {
        return $this->belongsToMany('App\Student', 'guardian_student', 'guardian_id', 'student_id');
    }
}
