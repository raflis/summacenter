<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_category_id')->unsigned();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('slider');
            $table->string('image');
            $table->string('badge');
            $table->string('start_of_classes');
            $table->string('schedule');
            $table->string('duration');
            $table->float('price');
            $table->string('subtitle');
            $table->string('modality');
            $table->string('download_video');
            $table->string('brochure');
            $table->string('video_id');
            $table->text('objective');
            $table->text('audience');
            $table->json('benefits')->nullable();
            $table->string('worker_id');
            $table->integer('order');
            $table->timestamps();

            $table->foreign('course_category_id')->references('id')->on('course_categories')
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
        Schema::dropIfExists('courses');
    }
}
