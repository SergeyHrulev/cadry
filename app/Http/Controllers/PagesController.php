<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        return view('pages/main');
    }

    public function test(){
        return view('layouts/test');
    }

    public function cvEdit(){
        return view('pages.resume_edit');
    }

    public function vacancyPage(){
        return view('pages.vacancy');
    }

    public function resumeCompanies()
    {
        return view('pages.resume_companies');
    }

    public function showResume(){
        return view('pages.show_resume');
    }

    public function servicePage()
    {
        return view('pages.service_page');
    }

    public function employerVacancyResponse()
    {
        return view('pages.lk_employer.responses');
    }
}
