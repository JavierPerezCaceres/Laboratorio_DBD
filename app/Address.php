<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = ['street', 'number'];

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
