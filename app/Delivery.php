<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';


    protected $fillable = ['receptor_name','contact_number','extra_wait_time','delivery_address','restaurant_id'];


    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
      }
    public function purchaseOrder(){
        return $this->hasMany(PurchaseOrder::class);
      }
}
