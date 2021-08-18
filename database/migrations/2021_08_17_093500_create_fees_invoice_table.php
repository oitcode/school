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
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id', 'fk_fees_invoice_section')
                ->references('section_id')->on('section');

            /*
             * Foreign key to fees_term table.
             */
            $table->unsignedBigInteger('fees_term_id');
            $table->foreign('fees_term_id', 'fk_fees_invoice_fees_term')
                ->references('fees_term_id')->on('fees_term');

            $table->string('type');
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
