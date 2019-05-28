<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name'
    ];

    public function applicant()
    {
        return $this->hasMany(Applicant::class);
    }

    public function city()
    {
        return $this->hasMany(Employer::class);
    }
}
