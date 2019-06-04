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
            CREATE OR REPLACE FUNCTION giveRole()
            RETURNS trigger AS
            $$
                BEGIN            
                 UPDATE users
                 SET role_id = 1
                 WHERE users.id = NEW.id   
                ;
                RETURN NEW;
            END
            $$ LANGUAGE plpgsql;
        ');
        DB::unprepared('
        CREATE TRIGGER asignRole 
        AFTER INSERT ON users 
        FOR EACH ROW
        EXECUTE PROCEDURE giveRole();
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
