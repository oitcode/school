<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_application', function (Blueprint $table) {
            $table->bigIncrements('admission_application_id');

            /*
             * Foreign key to academic_session table.
             */
            $table->unsignedBigInteger('academic_session_id');
            $table->foreign('academic_session_id', 'fk_admission_application_academic_session')
                ->references('academic_session_id')->on('academic_session');

            $table->string('student_name');
            $table->date('dob')->nullable();
            $table->string('student_email')->email()->nullable();
            $table->string('student_phone')->nullable();
            $table->string('student_address')->nullable();

            $table->string('primary_guardian_name');
            $table->string('primary_guardian_email')->email()->nullable();
            $table->string('primary_guardian_phone');
            $table->string('primary_guardian_address')->nullable();

            $table->string('secondary_guardian_name')->nullable();
            $table->string('secondary_guardian_email')->email()->nullable();
            $table->string('secondary_guardian_phone')->nullable();
            $table->string('secondary_guardian_address')->nullable();

            $table->string('o_class');

            $table->string('resume_file_path')->nullable();
            $table->string('image_file_path')->nullable();

            $table->string('old_school_name')->nullable();
            $table->string('old_school_location')->email()->nullable();
            $table->string('old_schol_class')->nullable();

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
        Schema::dropIfExists('admission_application');
    }
}
