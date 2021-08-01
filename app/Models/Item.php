<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
      'name','company','type','butta','machinery','details','image','status'
    ];
}
