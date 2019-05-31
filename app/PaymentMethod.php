<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';
    
	protected $fillable = [
    'payment_type',

    'card_payment_id'
	];

    protected $hidden = ['created_at','updated_at',];

    public function purchaseOrder(){
    	return $this->belongsTo(PurchaseOrder::class);
    }

    public function cardPayment(){
    	return $this->hasOne(CardPayment::class);
    }
}
