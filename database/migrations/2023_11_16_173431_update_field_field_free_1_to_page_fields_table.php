<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFieldFieldFree1ToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->json('field_free_1')->nullable()->after('certifications_items4');
            $table->json('field_free_2')->nullable()->after('field_free_1');
            $table->json('field_free_3')->nullable()->after('field_free_2');
            $table->json('field_free_4')->nullable()->after('field_free_3');
            $table->json('field_free_5')->nullable()->after('field_free_4');
            $table->json('field_free_6')->nullable()->after('field_free_5');
            $table->json('field_free_7')->nullable()->after('field_free_6');
            $table->json('field_free_8')->nullable()->after('field_free_7');
            $table->json('field_free_9')->nullable()->after('field_free_8');
            $table->json('field_free_10')->nullable()->after('field_free_9');
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
