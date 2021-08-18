<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'section';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'section_id';

    protected $fillable = [
        'o_class_id', 'name',
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
    public function oClass()
    {
        return $this->belongsTo('App\OClass', 'o_class_id', 'o_class_id');
    }

    /*
     * student table.
     *
     */
    public function students()
    {
        return $this->belongsToMany('App\Student', 'section_student', 'section_id', 'student_id');
    }
}
