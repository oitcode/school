<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainpageContent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mainpage_content';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'mainpage_content_id';

    protected $fillable = [
        'body', 'image_path',
    ];
}
