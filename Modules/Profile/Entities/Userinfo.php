<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $fillable = ["phone"," dob"," address"," city"," country"," postalcode"];

    public function users()
    {
        return $this->hasOne('App\User', 'user_id');
    }
}
