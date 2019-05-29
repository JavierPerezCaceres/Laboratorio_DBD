<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_orders';
    
	protected $fillable = [
    	'amount',
    	'delivery_method',
    	'purchase_type',
    	'confirmation',
    	'observations',
	];

    protected $hidden = ['created_at','updated_at',];

    public function paymentMethod(){
    	return $this->belongsTo(PaymentMethod::class);
    }

    /*public function menuReservation(){
    	return $this->hasMany(MenuReservation::class);
    }

    public function delivery(){
    	return $this->belongsTo(Delivery::class);
    }*/

    public function client(){
    	return $this->belongsTo(Client::class);
    }
}
