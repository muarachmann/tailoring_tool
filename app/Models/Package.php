<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
