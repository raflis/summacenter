<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();

            $table->json('home_sliders')->nullable();
            $table->json('project_sliders')->nullable();
            $table->json('contact_sliders')->nullable();
            $table->json('blog_sliders')->nullable();
            $table->string('info_title');
            $table->text('info_description')->nullable();
            $table->json('benefit_items')->nullable();
            $table->json('details')->nullable();
            $table->json('number_counter')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp1')->nullable();
            $table->string('whatsapp2')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
