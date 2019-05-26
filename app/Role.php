<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    
    protected $fillable = ['type', 'description'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
