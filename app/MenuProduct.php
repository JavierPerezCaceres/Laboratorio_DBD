<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuProduct extends Model
{
    protected $table = 'menu_products';
    
    protected $fillable = ['price','menu_id','product_id'];

    protected $hidden = ['created_at','updated_at',];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
