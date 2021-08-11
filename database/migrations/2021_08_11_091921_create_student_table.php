<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('name');

            /*
             * Foreign key to o_class table.
             */
            $table->unsignedBigInteger('o_class_id');
            $table->foreign('o_class_id', 'fk_student_o_class')
                ->references('o_class_id')->on('o_class');

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
        Schema::dropIfExists('student');
    }
}
