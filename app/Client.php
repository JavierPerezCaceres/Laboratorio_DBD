<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
    	'name',
    	'lastname',
    	'phone',
    ];

    protected $hidden = ['created_at','updated_at',];

    public function purchaseOrder(){
    	return $this->hasMany(PurchaseOrder::class);
    }

    public function user(){
    	return $this->hasOne(User::class);
    }

    public function tableReservation(){
    	return $this->belongsTo(TableReservation::class);
    }
}
