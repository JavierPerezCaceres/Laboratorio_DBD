<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    'payment_type'
    'payment_method_type'

    protected $hidden = ['created_at','updated_at'];

    public function purchaseOrder(){
    	return $this->belongsTo(PurchaseOrder::class);

    public function cardPayment(){
    	return $this->hasOne(CardPayment::class);
}
