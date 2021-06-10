<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->bigIncrements('about_us_id');

            $table->text('paragraph_1');
            $table->string('image_path_1');
            $table->text('paragraph_2')->nullable();
            $table->string('image_path_2')->nullable();
            $table->text('paragraph_3')->nullable();
            $table->string('image_path_3')->nullable();

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
        Schema::dropIfExists('about_us');
    }
}
