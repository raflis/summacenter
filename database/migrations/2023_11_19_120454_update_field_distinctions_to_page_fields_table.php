<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFieldDistinctionsToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->string('distinctions_title1')->nullable()->after('educational_model_image3');
            $table->text('distinctions_text1')->nullable()->after('distinctions_title1');
            $table->string('distinctions_image1')->nullable()->after('distinctions_text1');
            $table->string('distinctions_image2')->nullable()->after('distinctions_image1');
            $table->string('distinctions_youtube')->nullable()->after('distinctions_image2');
            $table->string('distinctions_title2')->nullable()->after('distinctions_youtube');
            $table->text('distinctions_text2')->nullable()->after('distinctions_title2');
            $table->json('distinctions_items')->nullable()->after('distinctions_text2');
            $table->text('distinctions_text3')->nullable()->after('distinctions_items');
            $table->json('distinctions_images')->nullable()->after('distinctions_text3');
            $table->string('distinctions_image3')->nullable()->after('distinctions_images');
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
