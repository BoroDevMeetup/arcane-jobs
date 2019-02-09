<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
}
