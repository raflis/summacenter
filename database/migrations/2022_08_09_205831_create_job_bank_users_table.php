<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobBankUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_bank_users', function (Blueprint $table) {
            $table->id();
            $table->integer('role')->default(2);
            $table->string('name');
            $table->string('lastname');
            $table->string('type_document')->nullable();
            $table->string('document')->nullable();
            $table->datetime('birthday')->nullable();
            $table->string('telephone')->nullable();
            $table->string('career')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_document')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_telephone')->nullable();
            $table->string('avatar')->default('avatar.png');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('job_bank_users');
    }
}
