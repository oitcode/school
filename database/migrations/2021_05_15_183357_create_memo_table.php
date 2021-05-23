<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memo', function (Blueprint $table) {
            $table->bigIncrements('memo_id');
            $table->date('publish_date');
            $table->text('body');

            /*
             * Foreign key to user table.
             * User which created this record.
             */
            $table->unsignedBigInteger('creator_id');
            $table->foreign('creator_id', 'fk_memo_user')
                ->references('id')->on('users');

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
        Schema::dropIfExists('memo');
    }
}
