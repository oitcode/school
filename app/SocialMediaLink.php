<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'social_media_link';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'social_media_link_id';

    protected $fillable = [
        'media_name', 'url',
    ];
}
