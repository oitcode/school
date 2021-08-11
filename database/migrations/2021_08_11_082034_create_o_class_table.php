<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_class', function (Blueprint $table) {
            $table->bigIncrements('o_class_id');
            $table->string('name');

            /*
             * Foreign key to academic_session table.
             */
            $table->unsignedBigInteger('academic_session_id');
            $table->foreign('academic_session_id', 'fk_class_academic_session')
                ->references('academic_session_id')->on('academic_session');

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
        Schema::dropIfExists('o_class');
    }
}
