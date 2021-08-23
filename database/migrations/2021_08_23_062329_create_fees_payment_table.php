<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_payment', function (Blueprint $table) {
            $table->bigIncrements('fees_payment_id');

            /*
             * Foreign key to fees_invoice table.
             */
            $table->unsignedBigInteger('fees_invoice_id');
            $table->foreign('fees_invoice_id', 'fk_fees_payment_fees_invoice')
                ->references('fees_invoice_id')->on('fees_invoice');

            $table->date('payment_date');
            $table->string('submitted_by');
            $table->integer('amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees_payment');
    }
}
