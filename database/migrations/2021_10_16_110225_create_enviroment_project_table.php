<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviromentProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enviroment_project', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('enviroment_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
            $table->integer('order')->nullable();
            $table->foreign('enviroment_id')->references('id')->on('enviroments')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('enviroment_project');
    }
}
