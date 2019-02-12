<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    private static $jobTypes = [
        'internship',
        'temporary',
        'fulltime',
        'parttime',
        'freelance',
        'contract',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public static function jobTypes()
    {
        return self::$jobTypes;
    }
}
