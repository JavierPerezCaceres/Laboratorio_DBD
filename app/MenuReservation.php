<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuReservation extends Model
{
    protected $table = 'menu_reservations';
    
    protected $fillable = ['price','quantity'];

    public function purchaseOrder(){
        return $this->belongsTo(PurchaseOrder::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
