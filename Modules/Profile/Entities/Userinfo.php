<?php

namespace Modules\Profile\Entities;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $fillable = ["phone"," dob"," address"," city"," country"," postalcode"];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
