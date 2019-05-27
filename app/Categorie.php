<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';
    
    protected $fillable = ['name'];

    public function product_category(){
        return $this->hasMany(ProductCategorie::class);
    }
}
