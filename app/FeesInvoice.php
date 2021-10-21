<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeesInvoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fees_invoice';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'fees_invoice_id';

    protected $fillable = [
        'student_id', 'o_class_id',
        'type', 'term',
        'payment_status',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * student table.
     *
     */
    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'student_id');
    }

    /*
     * o_class table.
     *
     */
    public function oClass()
    {
        return $this->belongsTo('App\OClass', 'o_class_id', 'o_class_id');
    }

    /*
     * fees_term table.
     *
     */
    public function feesTerm()
    {
        return $this->belongsTo('App\FeesTerm', 'fees_term_id', 'fees_term_id');
    }

    /*
     * fees_payment table.
     *
     */
    public function feesPayments()
    {
        return $this->hasMany('App\FeesPayment', 'fees_invoice_id', 'fees_invoice_id');
    }


    /*-------------------------------------------------------------------------
     * Methods
     *-------------------------------------------------------------------------
     *
     */


    /*
     * get pending amount.
     *
     */
    public function getPendingAmount()
    {
        $pendingAmount = $this->amount;

        foreach ($this->feesPayments as $feesPayment) {
            $pendingAmount -= $feesPayment->amount;
        }

        return $pendingAmount;
    }

    /*
     * get received amount.
     *
     */
    public function getReceivedAmount()
    {
        $receivedAmount = 0;

        foreach ($this->feesPayments as $feesPayment) {
            $receivedAmount += $feesPayment->amount;
        }

        return $receivedAmount;
    }
}
