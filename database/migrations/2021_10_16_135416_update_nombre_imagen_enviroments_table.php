<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNombreImagenEnviromentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enviroments', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('imagen');
            $table->string('name')->after('id');
            $table->string('image')->after('name');
            //$table->integer('orden')->nullable()->after('project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enviroments', function (Blueprint $table) {
            
        });
    }
}
