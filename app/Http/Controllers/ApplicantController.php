<?php

namespace App\Http\Controllers;

use App\CategoryVacancy;
use App\Cv;
use App\Applicant;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class ApplicantController extends Controller implements HasMedia
{
    use HasMediaTrait;

    public function store(Request $request)
    {
        $applicant = new Applicant();
        $applicant->user_id = Auth::id();
        $applicant->fill($request->all());
        $applicant->sex = 'мужской';
        $applicant->save();
        if ($request->cvs) {
            foreach ($request->cvs as $cv) {
                $data = Cv::find($cv);
                $data->applicant_id = $applicant->id;
                $data->save();
            }
        }
        return $applicant;
    }

    public function showResume()
    {
        $applicants = Applicant::with(['cv', 'city'])->where('user_id', '=', Auth::id())->get();
//        dd($applicants);
        return view('pages.show_resume', [
            'applicants' => $applicants
        ]);
    }

    public function storeAvatar(Request $request)
    {
        $avatar = User::find(Auth::id());
        $avatar->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        $file = $avatar->getFirstMediaUrl('avatars');
        $file = $avatar->getFirstMedia('avatars');
        $url = $file->getUrl();
        return $url;
    }

    public function test()
    {
        $avatar = User::find(Auth::id());
//        $avatar->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        $file = $avatar->getFirstMedia('avatars');
        $url = $file->getPath();
        dd($file, $url);
    }
}
