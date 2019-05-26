<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardPayment extends Model
{
    protected $fillable = [
            'autorization_code',
            'transaction_code',
            'card_number',
            'account_type',
            'expiration_date',
            'card_payment_id',
    ];

    protected $hidden = ['created_at','updated_at',];

    public function paymentMethod(){
    	return $this->belongsTo(PaymentMethod::class)
    };

    
}
