<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategorie extends Model
{
    protected $table = 'product_categories';

    protected $hidden = ['created_at','updated_at',];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function category(){
        return $this->belongsTo(Categorie::class);
    }
}
