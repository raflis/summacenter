<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('currency');
            $table->string('purchase_number');
            $table->datetime('transaction_date');
            $table->string('card');
            $table->string('brand');
            $table->string('status');
            $table->json('detail');
            $table->integer('paid');
            $table->string('invoice_name');
            $table->string('invoice_department');
            $table->string('invoice_district');
            $table->string('invoice_address');
            $table->string('invoice_telephone');
            $table->string('invoice_email');
            $table->string('user_name');
            $table->string('user_lastname');
            $table->string('user_type_document');
            $table->string('user_document');
            $table->string('user_department');
            $table->string('user_district');
            $table->string('user_address');
            $table->string('user_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
