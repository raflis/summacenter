<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGraduatesTitlesToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->json('graduates_titles')->nullable()->after('support_items2');
            $table->json('graduates_images')->nullable()->after('graduates_titles');
            $table->json('graduates_items')->nullable()->after('graduates_images');
            $table->json('job_bank_advertising')->nullable()->after('graduates_items');
            $table->string('aboutus_title')->nullable()->after('job_bank_advertising');
            $table->string('aboutus_description')->nullable()->after('aboutus_title');
            $table->string('aboutus_video')->nullable()->after('aboutus_description');
            $table->text('aboutus_mission')->nullable()->after('aboutus_video');
            $table->text('aboutus_vision')->nullable()->after('aboutus_mission');
            $table->json('aboutus_images')->nullable()->after('aboutus_vision');
            $table->json('aboutus_items1')->nullable()->after('aboutus_images');
            $table->json('aboutus_items2')->nullable()->after('aboutus_items1');
            $table->text('terms_and_conditions')->nullable()->after('aboutus_items2');
            $table->text('privacy_policies')->nullable()->after('terms_and_conditions');
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
