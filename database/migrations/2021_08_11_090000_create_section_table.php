<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->bigIncrements('section_id');

            /*
             * Foreign key to o_class table.
             */
            $table->unsignedBigInteger('o_class_id');
            $table->foreign('o_class_id', 'fk_section_o_class')
                ->references('o_class_id')->on('o_class');

            $table->string('name');

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
        Schema::dropIfExists('section');
    }
}
