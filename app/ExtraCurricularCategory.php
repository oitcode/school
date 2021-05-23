<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraCurricularCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'extra_curricular_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'extra_curricular_category_id';

    protected $fillable = [
        'name', 'comment',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * extra_curricular table.
     *
     */
    public function extraCurriculars()
    {
        return $this->hasMany('App\ExtraCurricular', 'extra_curricular_category_id', 'extra_curricular_category_id');
    }
}
