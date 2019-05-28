<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = ['name'];

    public function productIngredient(){
        return $this->hasMany(ProductIngredient::class);
    }

}
