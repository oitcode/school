<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facility';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'facility_id';

    protected $fillable = [
        'name', 'facility_category_id', 'info', 'comment',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * facility_category table.
     *
     */
    public function facilityCategory()
    {
        return $this->belongsTo('App\FacilityCategory', 'facility_category_id', 'facility_category_id');
    }
}
