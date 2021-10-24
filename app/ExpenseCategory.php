<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expense_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'expense_category_id';

    protected $fillable = [
        'name',
    ];


    /*-------------------------------------------------------------------------
     * Relationships
     *-------------------------------------------------------------------------
     *
     */


    /*
     * expense table.
     *
     */
    public function expenses()
    {
        return $this->hasMany('App\Expense', 'expense_category_id', 'expense_category_id');
    }
}
