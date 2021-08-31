<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility', function (Blueprint $table) {
            $table->bigIncrements('facility_id');
            $table->string('name', 255);
            $table->text('info')->nullable();

            /*
             * Foreign key to facility_category table.
             */
            $table->unsignedBigInteger('facility_category_id');
            $table->foreign('facility_category_id', 'fk_facility_facility_category')
                ->references('facility_category_id')->on('facility_category');

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
        Schema::dropIfExists('facility');
    }
}
