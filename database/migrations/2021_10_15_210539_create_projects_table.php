<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_project_id')->unsigned();
            $table->bigInteger('type_property_id')->unsigned();
            $table->bigInteger('district_id')->unsigned();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('description_index');
            $table->string('image_desktop');
            $table->string('image_mobile');
            $table->string('image_index');
            $table->string('image_form');
            $table->string('title1');
            $table->text('descripcion1');
            $table->string('image1');
            $table->text('map');
            $table->json('locations')->nullable();
            $table->json('spaces')->nullable();
            $table->json('plans')->nullable();
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');
            $table->integer('order');
            $table->timestamps();
            
            $table->foreign('type_project_id')->references('id')->on('type_projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('type_property_id')->references('id')->on('type_properties')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('district_id')->references('id')->on('districts')
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
        Schema::dropIfExists('projects');
    }
}
