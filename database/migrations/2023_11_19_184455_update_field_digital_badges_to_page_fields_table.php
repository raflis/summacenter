<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFieldDigitalBadgesToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->string('digital_badges_title1')->nullable()->after('distinctions_image3');
            $table->text('digital_badges_text1')->nullable()->after('digital_badges_title1');
            $table->string('digital_badges_image1')->nullable()->after('digital_badges_text1');
            $table->json('digital_badges_detail1')->nullable()->after('digital_badges_image1');
            $table->json('digital_badges_detail2')->nullable()->after('digital_badges_detail1');
            $table->json('digital_badges_detail3')->nullable()->after('digital_badges_detail2');
            $table->json('digital_badges_detail4')->nullable()->after('digital_badges_detail3');
            $table->json('digital_badges_detail5')->nullable()->after('digital_badges_detail4');
            $table->json('digital_badges_detail6')->nullable()->after('digital_badges_detail5');
            $table->json('digital_badges_detail7')->nullable()->after('digital_badges_detail6');
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
