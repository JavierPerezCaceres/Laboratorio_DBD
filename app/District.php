<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    
    protected $fillable = ['name'];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }
}
