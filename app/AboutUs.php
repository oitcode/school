<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'about_us';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'about_us_id';

    protected $fillable = [
        'paragraph_1', 'image_path_1',
        'paragraph_2', 'image_path_2',
        'paragraph_3', 'image_path_3',
        'comment',
    ];
}
