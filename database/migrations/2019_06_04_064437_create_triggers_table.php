<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION available_table()
            RETURNS trigger AS
            $$
                DECLARE
                i INTEGER := NEW.people_quantity;
                j INTEGER := 0;
                valor INTEGER := NEW.id;
                BEGIN           
                LOOP 
                    EXIT WHEN j = i;
                    j := j + 1;
                    INSERT INTO tables (capacity,number,avaible,restaurant_id,created_at,updated_at) 
                    VALUES 
                    (10, j, 0, valor, NEW.created_at, NEW.updated_at );
                END LOOP ;
                RETURN NEW;
            END
            $$ LANGUAGE plpgsql;
        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('triggers');
    }
}
