<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryVacancy extends Model
{
    protected $table = 'category_vacancy';

    protected $fillable =[
        'category_id',
        'vacancy_id'
    ];

    public $timestamps = false;

    public function getCategoryVacancies($name)
    {
        $vacancies = DB::table('categories as c')
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
            ->join('category_vacancy as cv', 'cv.category_id', '=', 'c.id')
            ->leftJoin('vacancies as v', 'v.id', '=', 'cv.vacancy_id')
            ->leftJoin('employers as e', 'e.id', '=', 'v.employer_id')
            ->where('c.name', '=', $name)->paginate(6);
        return $vacancies;
    }
}
