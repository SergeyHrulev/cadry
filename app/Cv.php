<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'date',
        'description'
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

}
