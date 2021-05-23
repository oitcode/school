<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraCurricular extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'extra_curricular';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'extra_curricular_id';

    protected $fillable = [
        'name', 'extra_curricular_category_id', 'description', 'image_path', 'comment',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * extra_curricular_cateogory table.
     *
     */
    public function extraCurricularCategory()
    {
        return $this->belongsTo('App\ExtraCurricularCategory', 'extra_curricular_category_id', 'extra_curricular_category_id');
    }
}
