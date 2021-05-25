<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrincipalsMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'principals_message';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'principals_message_id';

    protected $fillable = [
        'message', 'image_path', 'comment',
    ];
}
