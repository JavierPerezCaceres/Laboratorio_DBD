<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    
    protected $fillable = ['street', 'number', 'district_id', 'client_id'];
    protected $hidden = ['created_at','updated_at'];

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
