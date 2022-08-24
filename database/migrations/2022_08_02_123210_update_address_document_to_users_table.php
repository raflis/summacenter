<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddressDocumentToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('type_document')->after('lastname');
            $table->string('document')->after('type_document');
            $table->string('telephone')->after('document');
            $table->string('address')->after('telephone');
            $table->string('department')->nullable()->after('address');
            $table->string('district')->nullable()->after('department');
            $table->string('invoice_name')->nullable()->after('district');
            $table->string('invoice_address')->nullable()->after('invoice_name');
            $table->string('invoice_department')->nullable()->after('invoice_address');
            $table->string('invoice_district')->nullable()->after('invoice_department');
            $table->string('invoice_telephone')->nullable()->after('invoice_district');
            $table->string('invoice_email')->nullable()->after('invoice_telephone');
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
