<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CustomAuthMiddleware;
use App\Http\Requests\LoginRequest;
use App\Models\Credential;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Log;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log as FacadesLog;
use Illuminate\Support\Facades\Session as FacadesSession;

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

    public function login () {
        return view('login.login');
    }

    public function loginPost (Request $request) {
        FacadesLog::info('loginPost');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ]);

        $middleware = new CustomAuthMiddleware();

        $response = $middleware->handle($request, function ($request) {
            FacadesLog::info('Nakapasok wowowowo');
            return redirect()->route('blogData');
        });        
        return $response;
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

    public function logout(Request $request) {

        // if (FacadesSession::has('loginId')){
            $request->session()->Flush();
            FacadesAuth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            redirect()->route('login');
        // }
            return redirect()->route('blogData');
    }

}

