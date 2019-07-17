<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('company_rut');
            $table->integer('cod_sis');
            $table->string('owner_name');
            $table->string('name');
            $table->boolean('condition');

            $table->unsignedInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_requests');
    }
}
