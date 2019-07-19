<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistrictRestaurant extends Model
{
    protected $table = 'district_restaurants';
    
    protected $fillable = ['district_id','restaurant_id'];

    protected $hidden = ['created_at','updated_at'];

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
