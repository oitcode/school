<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTermTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_term', function (Blueprint $table) {
            $table->bigIncrements('fees_term_id');

            /*
             * Foreign key to academic_session table.
             */
            $table->unsignedBigInteger('academic_session_id');
            $table->foreign('academic_session_id', 'fk_fees_term_academic_session')
                ->references('academic_session_id')->on('academic_session');

            $table->string('term');

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
        Schema::dropIfExists('fees_term');
    }
}
