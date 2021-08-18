<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionStudent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'section_student';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'section_student_id';

    protected $fillable = [
        'section_id', 'student_id',
        'status',
    ];
}
