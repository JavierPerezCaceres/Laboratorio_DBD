<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantRequest extends Model
{
  protected $table = 'restaurant_requests';


  protected $fillable = ['company_rut','cod_sis','owner_name','name','condition','user_id'];
  protected $hidden = ['created_at','updated_at'];


  public function user(){
      return $this->belongsTo(User::class);
    }
}
