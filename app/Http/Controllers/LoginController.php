<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index () {
        return view('common.login');
    }

    public function loginSubmit (LoginRequest $request) {
        /*
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'max:10']
        ],[
            'email.required' => 'Email Required!',
            'email.email' => 'Email Required!',
            'password.required' => 'Password Required!',
        ]);
        dd($request);
        dd($request->email);
        */
        return $request;
    }
}
