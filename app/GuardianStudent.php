<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuardianStudent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guardian_student';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'guardian_student_id';

    protected $fillable = [
        'guardian_id', 'student_id', 'type',
    ];
}
