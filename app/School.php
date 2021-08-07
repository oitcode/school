<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'school_id';

    protected $fillable = [
        'name', 'logo_image_path', 'phone', 'email', 'address', 'slogan', 'comment',
    ];
}
