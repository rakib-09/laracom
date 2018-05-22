<?php

namespace Modules\Cart\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product as Product;

class TempCart extends Model
{
    protected $fillable = ['product_id','product_price','product_image', 'product_quantity', 'user_id'];

    public function product_info()
    {
        return Product::where('id', $this->product_id)->first();
    }
}
