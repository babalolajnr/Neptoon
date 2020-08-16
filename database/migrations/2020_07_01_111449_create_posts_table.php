<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->string('slug');
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('publish_status');
            $table->longText('body');
            $table->bigInteger('views')->default(0);
            $table->bigInteger('likes')->default(0);

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
        Schema::dropIfExists('posts');
    }
}
