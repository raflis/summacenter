<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePositionToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->datetime('birthday')->nullable()->after('document');
            $table->string('career')->nullable()->after('telephone');
            $table->string('position')->nullable()->after('career');
            $table->string('company_name')->nullable()->after('invoice_email');
            $table->string('company_document')->nullable()->after('company_name');
            $table->string('type_document')->nullable()->change();
            $table->string('document')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
