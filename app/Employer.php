<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable =[
        'name',
        'description',
        'site',
        'phone',
        'additional_phone',
        'active_phone'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function vacancy()
    {
        return $this->hasMany(Vacancy::class);
    }
}
