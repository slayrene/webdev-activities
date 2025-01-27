<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Credential;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash;

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

    
    public function register () {
        return view('login.register');
    }

    public function registerPost(Request $request) {

        $user = new User();

        $password = Hash::make($request->password);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;

        FacadesDB::beginTransaction();
        FacadesDB::commit();

        FacadesDB::beginTransaction();
        try {
            $user->save();
        } catch (QueryException $e) {

            $message = "ERROR";
            $errorCode = $e->errorInfo[1];

            if($errorCode == 1062) {
                $message = "Email already exists";
            }

            return back()->with('error', $message);

        }

        $id = $user->id;
        if ($id > 0){
            try {
                $credentials = new Credential();

                $credentials->user_id = $id;
                $credentials->is_deleted = 0;
                $credentials->password = $password;

                $credentials->save();

            } catch (QueryException $e) {
                $message = "ERROR";
                FacadesDB::rollback();
                return back()->with('error', $message);

            }
        }
        FacadesDB::commit();
        return back()->with('success', 'Register Successfully');
    }
}

