<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    
    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at'];

    public function district(){
        return $this->hasMany(District::class);
    }
}
