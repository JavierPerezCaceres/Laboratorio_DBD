<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION create_restaurant() 
        RETURNS TRIGGER AS $$

        BEGIN
            INSERT INTO tables (created_at, updated_at, capacity, number, avaible, restaurant_id)
            VALUES (NOW()::timestamp, NOW()::timestamp, 10, 1, 1, NEW.id);
            RETURN NEW;
        END
        $$ LANGUAGE plpgsql;
        ');

        DB::unprepared('
        CREATE TRIGGER create_restaurant

        AFTER INSERT ON restaurants

        FOR EACH ROW 
        EXECUTE PROCEDURE create_restaurant();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_tables');
    }
}
