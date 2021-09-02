<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsContent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'about_us_content';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'about_us_content_id';

    protected $fillable = [
        'body', 'image_path',
    ];
}
