<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegController extends Controller
{


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['string', 'min:7', 'max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function create(array $data)
    {
        $pass = random_bytes(12);
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($pass),
        ]);

    }

    public function register(Request $request)
    {
        return $request;
//        $validator = $this->validator($request->all())->validate();
//        if (!$validator) {
//            return 'Validator fails';
//        } else {
//            $user = $this->create($request->all());
//            return $user;
//        }

    }


}
