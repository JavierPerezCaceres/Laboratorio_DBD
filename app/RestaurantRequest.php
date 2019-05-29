<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantRequest extends Model
{
  protected $table = 'restaurant_requests';


  protected $fillable = ['company_rut','cod_sis','owner_name','condition','user_id'];


  public function user(){
      return $this->belongsTo(User::class);
    }
}
