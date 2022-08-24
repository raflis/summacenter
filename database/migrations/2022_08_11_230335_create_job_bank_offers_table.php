<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobBankOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_bank_offers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_bank_user_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->text('requirements');
            $table->text('responsibilities');
            $table->text('benefits');
            $table->text('detail');
            $table->string('job_type');
            $table->string('department');
            $table->string('address');
            $table->string('category')->nullable();
            $table->string('salary');
            $table->datetime('end_offer');
            $table->timestamps();
            $table->foreign('job_bank_user_id')->references('id')->on('job_bank_users')
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
        Schema::dropIfExists('job_bank_offers');
    }
}
