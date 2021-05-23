<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraCurricularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_curricular', function (Blueprint $table) {
            $table->bigIncrements('extra_curricular_id');
            $table->string('name', 255);
            $table->text('description')->nullable();

            /*
             * Foreign key to extra_curricular_category table.
             */
            $table->unsignedBigInteger('extra_curricular_category_id');
            $table->foreign('extra_curricular_category_id', 'fk_extra_curricular_extra_curricular_category')
                ->references('extra_curricular_category_id')->on('extra_curricular_category');

            $table->string('image_path');

            $table->timestamps();
            $table->string('comment', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_curricular');
    }
}
