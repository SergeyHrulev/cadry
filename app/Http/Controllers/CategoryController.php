<?php

namespace App\Http\Controllers;

use App\CategoryVacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getCategoryVacancy(CategoryVacancy $categoryVacancy, $name)
    {
        $vacancies = $categoryVacancy->getCategoryVacancies($name);
        $categories = DB::table('categories')->limit(6)->get();
        return view('pages/main', [
            'categories' => $categories,
            'vacancies' => $vacancies
        ]);
    }
}
