<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeesPayment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fees_payment';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'fees_payment_id';

    protected $fillable = [
        'fees_invoice_id',
        'payment_date', 'submitted_by',
        'amount',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * fees_invoice table.
     *
     */
    public function feesInvoice()
    {
        return $this->belongsTo('App\FeesInvoice', 'fees_invoice_id', 'fees_invoice_id');
    }
}
