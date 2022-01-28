<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->json('service_sliders')->nullable();
            $table->string('service_title');
            $table->text('service_description');
            $table->json('service_items')->nullable();
            $table->string('title1');
            $table->string('image1');
            $table->text('description1');
            $table->string('title2');
            $table->string('image2');
            $table->text('description2');
            $table->string('title3');
            $table->string('image3');
            $table->text('description3');
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
        Schema::dropIfExists('services');
    }
}
