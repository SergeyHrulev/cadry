<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function employerVacancyResponse()
    {
        return view('pages.lk_employer.responses');
    }

    public function employerVacancyJobs()
    {
        return view('pages.lk_employer.jobs');
    }

    public function employerVacancySearch()
    {
        return view('pages.lk_employer.search');
    }

    public function employerVacancyShow()
    {
        return view('pages.lk_employer.show');
    }

    public function employerSettings()
    {
        return view('pages.lk_employer.settings');
    }

    public function employerNewVacancy()
    {
        return view('pages.lk_employer.newvacancy');
    }
}
