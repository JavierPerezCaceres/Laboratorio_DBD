<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'restaurants';
    
    protected $fillable = ['capacity', 'number', 'avaible'];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
