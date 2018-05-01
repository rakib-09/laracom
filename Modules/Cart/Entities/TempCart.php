<?php

namespace Modules\Cart\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;

class TempCart extends Model
{
    protected $fillable = ['product_id','product_price','product_image'];

    public function product()
    {
        return Product::where('id', $this->product_id)->first();
    }
}
