<?php

namespace Modules\Payment\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Payment\Entities\Order;

class Invoice extends Model
{
    protected $fillable = [];

    public function order_info()
    {
        return Order::where('invoice_id', $this->id)->first();
    }
}
