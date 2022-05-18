<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldSlugDetailToBadgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('badges', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable()->after('name');
            $table->string('type')->after('slug');
            $table->string('level')->after('type');
            $table->string('time')->after('level');
            $table->text('detail')->after('time');
            $table->json('skills')->nullable()->after('detail');
            $table->string('criterion1')->after('time');
            $table->string('criterion2')->after('criterion1');
            $table->string('image2')->after('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('badges', function (Blueprint $table) {
            //
        });
    }
}
