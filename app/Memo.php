<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'memo';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'memo_id';

    protected $fillable = [
        'publish_date', 'body', 'comment', 'creator_id',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * users table.
     *
     */
    public function creator()
    {
        return $this->belongsTo('App\User', 'creator_id', 'id');
    }
}
