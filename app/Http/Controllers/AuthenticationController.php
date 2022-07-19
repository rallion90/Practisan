<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AuthModel;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Hash;

class AuthenticationController extends Controller
{
    //
    use AuthenticatesUsers;

    public function __construct(){
    	$this->middleware('guest:admin');
    }

    public function login()
    {
        return view('authentication.login');
    }

    public function loginTrigger(Request $request)
    {
        $credentials = $request->only('username', 'password');

    	if(Auth::guard('admin')->attempt($credentials)){
    		return view('dashboard');
    	}else{
            return 'puks';
        }
    }
}
