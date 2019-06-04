<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('reserve_number');
            $table->string('reserve_name');
            $table->integer('people_quantity');
            $table->date('reserve_date');
            $table->time('reserve_hour')->nullable();
            $table->integer('reserve_confirmation')->nullable();

            $table->unsignedInteger('table_id');
            $table->unsignedInteger('purchase_order_id');

            $table->foreign('table_id')->references('id')->on('tables')->onDelete('cascade');
            $table->foreign('purchase_order_id')->references('id')->on('purchase_orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reservations');
    }
}
