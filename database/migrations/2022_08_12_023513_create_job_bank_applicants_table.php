<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobBankApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_bank_applicants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('job_bank_offer_id')->unsigned();
            $table->bigInteger('job_bank_user_id')->unsigned();
            $table->timestamps();
            $table->foreign('job_bank_offer_id')->references('id')->on('job_bank_offers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('job_bank_applicants');
    }
}
