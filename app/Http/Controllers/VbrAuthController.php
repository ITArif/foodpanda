<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class VbrAuthController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest:system_admin')->except('logout');
    }

    private $errors= [];

    protected $redirectTo = '/dashboard';

    public function vbrLoginForm()
    {
        return view('auth.vbr_login');
    }

    public function vbrLogin(Request $request){
    	$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $auth = Admin::where('email','=', $request->email)->first();
        if ($auth) {
        	if (Hash::check($request->password, $auth->password)) {
        		session([
                     'id' =>$auth->id,
                     'name' =>$auth->name,
                     'email' =>$auth->email,
                     'role' =>$auth->role,
                ]);
                if ($auth->role =='vbr') {
                    return redirect('/vbr/dashboard');
                }elseif ($auth->role =='admin') {
                    return redirect('/dashboard');
                }else{
                    return redirect('/vbr/login');
                }
        	}else{
        		return redirect('/vbr/login')
                ->withInput($request->only('email'))
                ->withErrors($this->errors);
        	}
        }else{
            return back()->with('failed','No Account For This Email');
        }
    }
}
