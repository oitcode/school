<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_structure', function (Blueprint $table) {
            $table->bigIncrements('fees_structure_id');

            /*
             * Foreign key to academic_session table.
             */
            $table->unsignedBigInteger('academic_session_id');
            $table->foreign('academic_session_id', 'fk_fees_structure_academic_session')
                ->references('academic_session_id')->on('academic_session');

            $table->integer('nursery');
            $table->integer('lkg');
            $table->integer('ukg');
            $table->integer('one');
            $table->integer('two');
            $table->integer('three');
            $table->integer('four');
            $table->integer('five');
            $table->integer('six');
            $table->integer('seven');
            $table->integer('eight');
            $table->integer('nine');
            $table->integer('ten');

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
        Schema::dropIfExists('fees_structure');
    }
}
