<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNuestrasCertificacionesToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->string('certifications_title1')->nullable()->after('responsibility_image6');
            $table->string('certifications_subtitle1')->nullable()->after('certifications_title1');
            $table->text('certifications_text1')->nullable()->after('certifications_subtitle1');
            $table->string('certifications_image1')->nullable()->after('certifications_text1');
            $table->string('certifications_title2')->nullable()->after('certifications_image1');
            $table->json('certifications_items2')->nullable()->after('certifications_title2');
            $table->string('certifications_title3')->nullable()->after('certifications_items2');
            $table->text('certifications_text3')->nullable()->after('certifications_title3');
            $table->string('certifications_youtube3')->nullable()->after('certifications_text3');
            $table->string('certifications_title4')->nullable()->after('certifications_youtube3');
            $table->text('certifications_text4')->nullable()->after('certifications_title4');
            $table->string('certifications_youtube4')->nullable()->after('certifications_text4');
            $table->json('certifications_items4')->nullable()->after('certifications_youtube4');
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
