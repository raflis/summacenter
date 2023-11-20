<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFieldEducationalModelToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->string('educational_model_title1')->nullable()->after('certifications_items4');
            $table->text('educational_model_text1')->nullable()->after('educational_model_title1');
            $table->string('educational_model_image1')->nullable()->after('educational_model_text1');
            $table->json('educational_model_learning')->nullable()->after('educational_model_image1');
            $table->text('educational_model_text2')->nullable()->after('educational_model_learning');
            $table->json('educational_model_models')->nullable()->after('educational_model_text2');
            $table->json('educational_model_items')->nullable()->after('educational_model_models');
            $table->string('educational_model_title2')->nullable()->after('educational_model_items');
            $table->string('educational_model_title21')->nullable()->after('educational_model_title2');
            $table->text('educational_model_text3')->nullable()->after('educational_model_title21');
            $table->string('educational_model_title22')->nullable()->after('educational_model_text3');
            $table->text('educational_model_text4')->nullable()->after('educational_model_title22');
            $table->string('educational_model_image2')->nullable()->after('educational_model_text4');
            $table->string('educational_model_title3')->nullable()->after('educational_model_image2');
            $table->string('educational_model_image3')->nullable()->after('educational_model_title3');
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
