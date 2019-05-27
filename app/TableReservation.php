<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableReservation extends Model
{
    protected $table = 'table_reservations';

    protected $fillable = ['reserve_number', 'reserve_name','people_quantity','reserve_date','reserve_hour','reserve_confirmation'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function table(){
        return $this->belongsTo(Table::class);
    }
}
