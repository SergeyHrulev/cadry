<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'sex',
        'date_of_birth',
        'education',
        'city_id',
        'phone',
        'work_permit',
        'wage_level',
        'payment_period',
    ];

    public function occupation()
    {
        return $this->hasMany(Occupation::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function cv()
    {
        return $this->hasMany(Cv::class);
    }
}
