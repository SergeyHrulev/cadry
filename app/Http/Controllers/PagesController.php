<?php

namespace App\Http\Controllers;

use App\Category;
use App\Vacancy;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(Vacancy $vacancy)
    {
        $categories = DB::table('categories')->limit(6)->get();
        $vacancies = $vacancy->getVacanciesMainPage(6);
        return view('pages/main', [
            'categories' => $categories,
            'vacancies' => $vacancies
        ]);
    }

    public function test(){
        return view('layouts/test');
    }

    public function cvEdit(){
        return view('pages.resume_edit');
    }

    public function vacancyPage(Vacancy $vacancy, $name)
    {
        $cur_vacancy = $vacancy->getVacancy($name);
        //dd($cur_vacancy);
        $vacancies = $vacancy->getVacanciesMainPage(3);
        return view('pages.vacancy', [
            'vacancies' => $vacancies,
            'c_vacancy' => $cur_vacancy
        ]);
    }

    public function resumeCompanies()
    {
        return view('pages.resume_companies');
    }



    public function servicePage()
    {
        return view('pages.service_page');
    }


}
