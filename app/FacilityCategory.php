<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facility_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'facility_category_id';

    protected $fillable = [
        'title', 'comment',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * facility table.
     *
     */
    public function facilities()
    {
        return $this->hasMany('App\Facility', 'facility_category_id', 'facility_category_id');
    }
}
