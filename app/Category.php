<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $fillable = [
        'name'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function product_category(){
        return $this->hasMany(ProductCategory::class);
    }
}
