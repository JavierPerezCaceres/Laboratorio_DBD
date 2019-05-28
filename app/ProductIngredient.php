<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductIngredient extends Model
{
    protected $table = 'product_ingredients';
    
    protected $fillable = [];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function ingredient(){
        return $this->belongsTo(Ingredient::class);
    }
}
