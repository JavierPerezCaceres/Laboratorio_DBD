<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    
    protected $fillable = ['name','total_price','discount','restaurant_id'];

    protected $hidden=['created_at','updated_at'];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function menuReservation(){
        return $this->hasMany(MenuReservation::class);
    }

    public function menuProduct(){
        return $this->hasMany(MenuProduct::class);
    }
}
