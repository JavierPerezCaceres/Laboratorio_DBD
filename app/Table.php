<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';
    
    protected $fillable = [
        'capacity', 
        'number', 
        'avaible',
        'restaurant_id'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function tableReservation(){
        return $this->belongTo(TableReservation::class);
    }
}
