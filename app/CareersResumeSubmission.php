<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareersResumeSubmission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'careers_resume_submission';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'careers_resume_submission_id';

    protected $fillable = [
        'name', 'email',
        'phone', 'file_path',
    ];
}
