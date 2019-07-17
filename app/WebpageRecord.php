<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebpageRecord extends Model
{
    protected $table = 'webpage_records';
    protected $fillable = ['action','user'];
    protected $hidden = ['created_at','updated_at'];

}
