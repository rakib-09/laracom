<?php

namespace Modules\Details\Entities;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ["name","bangla_name","writer","publication","image","price","discount","ext_link","description"];
}
