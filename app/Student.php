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
        'name',
        'email', 'phone', 'address',
        'image_file_path',
        'o_class_id',
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
     * fees_invoice table.
     *
     */
    public function feesInvoices()
    {
        return $this->hasMany('App\FeesInvoice', 'student_id', 'student_id');
    }

    /*
     * guardian table.
     *
     */
    public function guardians()
    {
        return $this->belongsToMany('App\Guardian', 'guardian_student', 'student_id', 'guardian_id')
            ->withPivot('type');
    }
}
