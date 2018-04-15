<?php

namespace Modules\Cart\Entities;

use Illuminate\Database\Eloquent\Model;

class TempCart extends Model
{
    protected $fillable = ['product_id','product_price','product_image'];
}
