<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateResponsabilidadToPageFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fields', function (Blueprint $table) {
            $table->text('responsibility_text1')->nullable()->after('cover_pages');
            $table->string('responsibility_image1')->nullable()->after('responsibility_text1');
            $table->text('responsibility_text2')->nullable()->after('responsibility_image1');
            $table->string('responsibility_image2')->nullable()->after('responsibility_text2');
            $table->text('responsibility_text3')->nullable()->after('responsibility_image2');
            $table->string('responsibility_image3')->nullable()->after('responsibility_text3');
            $table->text('responsibility_text4')->nullable()->after('responsibility_image3');
            $table->string('responsibility_image4')->nullable()->after('responsibility_text4');
            $table->text('responsibility_text5')->nullable()->after('responsibility_image4');
            $table->string('responsibility_image5')->nullable()->after('responsibility_text5');
            $table->text('responsibility_text6')->nullable()->after('responsibility_image5');
            $table->string('responsibility_image6')->nullable()->after('responsibility_text6');
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
