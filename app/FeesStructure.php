<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeesStructure extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fees_structure';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'fees_structure_id';

    protected $fillable = [
        'academic_session_id',
        'nursery', 'lkg', 'ukg',
        'one', 'two', 'three', 'four', 'five',
        'six', 'seven', 'eight', 'nine', 'ten',
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
    public function academicSession()
    {
        return $this->belongsTo('App\AcademicSession', 'academic_session_id', 'academic_session_id');
    }
}
