<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vacancy extends Model
{
    protected $fillable = [
        'name',
        'description',
        'conditions',
        'responsibilities',
        'vacancy_address',
        'wage_from',
        'wage_to',
        'payment_period',
        'without_experience',
        'flexible_schedule',
        'part_time',
        'shift_work',
        'side_work',
        'available_for_minors'
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function getVacanciesMainPage($paginate)
    {
        $vacancies = DB::table('vacancies as v')
            ->select(
                'v.name as v_name',
                'v.description as v_description',
                'v.conditions as v_conditions',
                'responsibilities as v_responsibilities',
                'v.wage_from as v_wage_from',
                'v.payment_period as v_payment_period',
                'v.vacancy_address as v_address',
                'e.name as c_name'
            )
            ->join('employers as e', 'e.id', '=', 'v.employer_id')
            ->paginate($paginate);
        return $vacancies;
    }

    public function getVacancy($name)
    {
        $vacancy = DB::table('vacancies as v')
            ->select(
                'v.name as v_name',
                'v.description as v_description',
                'v.conditions as v_conditions',
                'responsibilities as v_responsibilities',
                'v.wage_from as v_wage_from',
                'v.payment_period as v_payment_period',
                'v.vacancy_address as v_address',
                'e.name as c_name'
            )
            ->join('employers as e', 'e.id', '=', 'v.employer_id')
            ->where('v.name', '=', $name)->get();
        return $vacancy;
    }

}
