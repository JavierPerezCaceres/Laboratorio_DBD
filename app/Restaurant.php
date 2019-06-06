<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    
    protected $fillable = [
        'category',
        'contact_number',
        'kitchen_type',
        'opening_hour',
        'closing_hour',
        'person_cost',
        'wait_time',
        'direction',
        'user_id'
    ];

    protected $hidden = ['created_at','updated_at'];

    public function table(){
        return $this->hasMany(Table::class);
    }

    public function menu(){
        return $this->hasMany(Menu::class);
    }

    public function delivery(){
        return $this->hasMany(Delivery::class);
    }

    public function valoration(){
        return $this->hasMany(Valoration::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
