<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductIngredient extends Model
{
    protected $table = 'product_ingredients';
    
    protected $fillable = ['product_id','ingredient_id'];

    protected $hidden = ['created_at','updated_at'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function ingredient(){
        return $this->belongsTo(Ingredient::class);
    }
}
