<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('category');
            $table->string('contact_number');
            $table->string('kitchen_type');
            $table->time('opening_hour');
            $table->time('closing_hour');
            $table->integer('person_cost');
            $table->integer('wait_time');
            $table->string('direction');

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
        Schema::dropIfExists('restaurants');
    }
}