<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    
    protected $fillable = ['name', 'city_id'];
    protected $hidden = ['created_at','updated_at'];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }

    public function restaurant(){
    	return $this->hasMany(Restaurant::class);
    }
}
