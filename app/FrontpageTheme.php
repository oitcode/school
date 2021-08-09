<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontpageTheme extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'frontpage_theme';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'frontpage_theme_id';

    protected $fillable = [
        'name', 'hero_image_path',
    ];
}
