<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rol_id', 'client_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol(){
        return $this->hasOne(Rol::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }
    /*
    public function restaurant_request(){
        return $this->hasMany(Restaurant_request::class);
    }*/

    public function client(){
        return $this->belongsTo(Client::class);
    }
    /*
    public function restaurant(){
        return $this->hasMany(Restaurant::class);
    }*/
    /*
    public function rate(){ //valoracion
        return $this->hasMany(Rate::class);
    }*/
}
