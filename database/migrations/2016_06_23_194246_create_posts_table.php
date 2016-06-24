<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('posts', function(Blueprint $table){
                $table->increments('id');
                $table->string('title');
                $table->text('description');

                $table->unsignedInteger('created_by');
                $table->unsignedInteger('updated_by');
                $table->unsignedInteger('deleted_by');

                $table->timestamps();
                $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
