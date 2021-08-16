<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_invoice', function (Blueprint $table) {
            $table->bigIncrements('fees_invoice_id');

            /*
             * Foreign key to student table.
             */
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id', 'fk_fees_invoice_student')
                ->references('student_id')->on('student');

            /*
             * Foreign key to o_class table.
             */
            $table->unsignedBigInteger('o_class_id');
            $table->foreign('o_class_id', 'fk_fees_invoice_o_class')
                ->references('o_class_id')->on('o_class');

            $table->string('type');
            $table->string('term');
            $table->integer('amount');
            $table->string('payment_status');

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
        Schema::dropIfExists('fees_invoice');
    }
}
