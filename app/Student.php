<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'name',
        'email', 'phone', 'address',
        'image_file_path',
        'o_class_id',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * section table.
     *
     */
    public function sections()
    {
        return $this->belongsToMany('App\Section', 'section_student', 'student_id', 'section_id')
            ->withPivot('status');
    }

    /*
     * current section table.
     *
     */
    public function currentSection()
    {
        return $this->belongsToMany('App\Section', 'section_student', 'student_id', 'section_id')
            ->wherePivot('status', 'current');
    }

    /*
     * fees_invoice table.
     *
     */
    public function feesInvoices()
    {
        return $this->hasMany('App\FeesInvoice', 'student_id', 'student_id');
    }

    /*
     * guardian table.
     *
     */
    public function guardians()
    {
        return $this->belongsToMany('App\Guardian', 'guardian_student', 'student_id', 'guardian_id')
            ->withPivot('type');
    }


    /*-------------------------------------------------------------------------
     * Methods
     *-------------------------------------------------------------------------
     *
     */


    /*
     * Get current section of student.
     *
     */
    public function getCurrentSection()
    {
        foreach ($this->currentSection as $currentSection)
            return $currentSection;
    }

    /*
     * Get pending fees invoices of student.
     *
     */
    public function getPendingFeesInvoices()
    {
        $invoices = $this->feesInvoices()->where('payment_status', '!=', 'paid')->get();

        return $invoices;
    }

    /*
     * Get paid fees invoices of student.
     *
     */
    public function getPaidFeesInvoices()
    {
        $invoices = $this->feesInvoices()->where('payment_status', 'paid')->get();

        return $invoices;
    }
}
