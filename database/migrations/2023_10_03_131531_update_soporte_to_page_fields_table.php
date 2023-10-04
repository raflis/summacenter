<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSoporteToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->string('support_button1_name')->nullable()->after('support_items2');
            $table->string('support_button1_telephone')->nullable()->after('support_button1_name');
            $table->string('support_button1_text')->nullable()->after('support_button1_telephone');
            $table->string('support_button2_name')->nullable()->after('support_button1_text');
            $table->string('support_button2_telephone')->nullable()->after('support_button2_name');
            $table->string('support_button2_text')->nullable()->after('support_button2_telephone');
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
