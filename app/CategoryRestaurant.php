<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryRestaurant extends Model
{
    protected $table = 'category_restaurants';
    
    protected $fillable = [
        'name'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function restaurant(){
        return $this->hasMany(Restaurant::class);
    }
}
