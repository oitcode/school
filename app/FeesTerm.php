<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeesTerm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fees_term';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'fees_term_id';

    protected $fillable = [
        'academic_session_id', 'term',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * academic_session table.
     *
     */
    public function academicSession()
    {
        return $this->belongsTo('App\AcademicSession', 'academic_session_id', 'academic_session_id');
    }

    /*
     * fees_invoice table.
     *
     */
    public function feesInvoices()
    {
        return $this->hasMany('App\FeesInvoice', 'fees_term_id', 'fees_term_id');
    }
}
