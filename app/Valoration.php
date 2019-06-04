<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoration extends Model
{
    protected $table = 'valorations';

	protected $fillable = ['score','comment','purchase_order_id','restaurant_id'];


    public function restaurant(){
    	return $this->belongsTo(Restaurant::class);
    }
    public function purchaseOrder(){
      return $this->belongsTo(PurchaseOrder::class);
    }
}
