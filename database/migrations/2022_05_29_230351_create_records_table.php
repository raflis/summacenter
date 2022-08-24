<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('type_document')->nullable();
            $table->string('document');
            $table->string('telephone');
            $table->string('interested_course')->nullable();
            $table->string('company')->nullable();
            $table->string('ruc')->nullable();
            $table->string('position')->nullable();
            $table->string('call_sms')->nullable();
            $table->text('observation')->nullable();
            $table->string('from');
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
        Schema::dropIfExists('records');
    }
}
