<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $fillable = ['slider1','slider2','slider3','promote1','writeup1','link1','promote2','writeup2','link2','promote3','writeup3','link3','weekly'];
}
