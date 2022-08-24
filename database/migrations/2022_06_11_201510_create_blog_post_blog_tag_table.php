<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostBlogTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post_blog_tag', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('blog_post_id')->unsigned();
            $table->bigInteger('blog_tag_id')->unsigned();
            $table->timestamps();
            $table->foreign('blog_post_id')->references('id')->on('blog_posts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('blog_tag_id')->references('id')->on('blog_tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post_blog_tag');
    }
}
