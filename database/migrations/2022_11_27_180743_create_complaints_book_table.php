<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints_book', function (Blueprint $table) {
            $table->id();
            $table->string('id_front');
            $table->string('type_contact');
            $table->string('name');
            $table->string('lastname1');
            $table->string('lastname2');
            $table->string('type_document');
            $table->string('document');
            $table->string('telephone');
            $table->string('email');
            $table->string('type_contract');
            $table->string('type_contract_clasification');
            $table->text('type_contract_description');
            $table->string('claim_type');
            $table->text('claim_description');
            $table->text('consumer_request');
            $table->string('file')->nullable();
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
        Schema::dropIfExists('complaints_book');
    }
}
