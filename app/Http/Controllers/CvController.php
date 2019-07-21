<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{



    public function store(Request $request)
    {
        $cv = Cv::create($request->all());

        return $cv;
    }

}
