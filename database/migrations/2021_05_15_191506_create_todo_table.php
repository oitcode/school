<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo', function (Blueprint $table) {
            $table->bigIncrements('todo_id');
            $table->date('publish_date');
            $table->string('title');
            $table->text('body')->nullable();
            $table->string('status');

            /*
             * Foreign key to user table.
             * User which created this record.
             */
            $table->unsignedBigInteger('creator_id');
            $table->foreign('creator_id', 'fk_todo_user')
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
        Schema::dropIfExists('todo');
    }
}
