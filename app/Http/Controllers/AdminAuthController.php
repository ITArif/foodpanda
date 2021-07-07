<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:system_admin')->except('logout');
    }

    private $errors= [];

    protected $redirectTo = '/dashboard';

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){
    	$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $auth = Admin::where('email','=', $request->email)->first();
        if ($auth) {
        	if (Hash::check($request->password, $auth->password)) {
        		$request->session()->put('LogedAdmin', $auth->id);
        		return redirect('/dashboard');
        	}else{
        		return redirect('/admin/login')
                ->withInput($request->only('email'))
                ->withErrors($this->errors);
        	}
        }else{
            return back()->with('failed','No Account For This Email');
        }
    }

    public function logout(Request $request)
    {
       if (session()->has('LogedAdmin')) {
       	 session()->pull('LogedAdmin');
       	 return redirect('/admin/login');
       }
    }
}
