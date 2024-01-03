<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFieldFieldFree12ToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->json('field_free_12')->nullable()->after('field_free_11');
            $table->json('field_free_13')->nullable()->after('field_free_12');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            //
        });
    }
}
