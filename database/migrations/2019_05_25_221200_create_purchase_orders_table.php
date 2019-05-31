<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->float('amount');
            $table->string('delivery_method');
            $table->string('purchase_type');
            $table->integer('confirmation');
            $table->string('observations');

            $table->unsignedInteger('payment_method_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('delivery_id');


            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');

            $table->foreign('delivery_id')->references('id')->on('deliverys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_orders');
    }
}
