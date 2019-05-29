<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = ['name'];

    protected $hidden = ['created_at','updated_at'];

    public function menuProduct(){
        return $this->hasMany(MenuProduct::class);
    }

    public function productIngredient(){
        return $this->hasMany(ProductIngredient::class);
    }

    public function productCategorie(){
        return $this->hasMany(ProductCategorie::class);
    }
}
