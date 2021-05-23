<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notice';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'notice_id';

    protected $fillable = [
        'publish_date', 'title', 'description', 'status', 'comment',
    ];
}
