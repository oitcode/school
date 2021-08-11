<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'name', 'o_class_id',
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
}
