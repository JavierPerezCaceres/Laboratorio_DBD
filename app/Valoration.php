<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoration extends Model
{
    protected $table = 'valorations';

	protected $fillable = ['score','commentary','user_id','restaurant_id'];


    public function restaurant(){
    	return $this->belongsTo(Restaurant::class);
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
}
