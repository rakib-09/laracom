<?php

namespace Modules\Payment\Entities;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [];


    public function invoices()
    {
        return $this->belongsTo('Modules\Payment\Entities\Invoice');
    }
}
