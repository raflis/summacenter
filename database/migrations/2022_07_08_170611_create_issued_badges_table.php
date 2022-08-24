<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuedBadgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issued_badges', function (Blueprint $table) {
            $table->id();
            $table->string('hash');
            $table->string('name');
            $table->string('image');
            $table->text('description')->nullable();
            $table->string('type_category');
            $table->string('level');
            $table->string('time_to_earn');
            $table->string('cost');
            $table->text('badge_template_activities')->nullable();
            $table->text('skills')->nullable();
            $table->string('issued_to');
            $table->string('recipient_email');
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
        Schema::dropIfExists('issued_badges');
    }
}
