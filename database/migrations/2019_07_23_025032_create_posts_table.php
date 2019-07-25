<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique()->index();
            $table->text('content')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('image')->nullable();
            $table->integer('cate_id');
            $table->string('author');
            $table->dateTime('publish_date')->nullable();
            $table->integer('views')->default(0);
            $table->string('slug')->unique()->index();
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
