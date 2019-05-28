<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuProduct extends Model
{
    protected $table = 'menu_products';
    
    protected $fillable = ['price'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
