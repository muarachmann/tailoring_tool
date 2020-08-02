<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.login');
    }


    public function login()
    {
        if(auth()->user() && auth()->user()->hasRole('super_admin|admin')){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('admin.login')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            $user_data = [
                'email' => $request->get('email'),
                'password' => $request->get('password')
            ];
            // attempt to do the login
            if (auth()->attempt($user_data)) {
                return redirect()->route('admin.dashboard');
            } else {
                session()->flash("error", "Invalid Credentials");
                return redirect()->route('admin.login');
            }
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        session()->flush();
        return redirect()->route('admin.login');
    }
}
