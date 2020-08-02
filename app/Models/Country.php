<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name', 'iso2', 'dial_code', 'priority'
    ];

    protected $casts = [
        'area_codes' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
