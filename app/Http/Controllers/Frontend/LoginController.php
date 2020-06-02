<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
session_start();

class LoginController extends Controller
{
    public function getFormLogin(Request $request)
    {
    	return view('frontend.home.login');
    }

    public function postLogin(Request $request)
    {
    	$email = $request->email;
        $password = md5($request->password);
        
        $user = User::where('email',$email)->where('password',$password)->first();
       
        if($user){
            Session::put('user_id',$user->id); // check tkhoan có đăng nhập bên trang layoust
            Session::put('user_name',$user->name);
            Session::put('user_email',$user->email);
            Session::put('user_phone',$user->phone);

            return redirect()->route('frontend.home');
        }else{
            return redirect()->back();
        }

    }

    public function getLogout() // Đăng xuất
    {
        Session::flush();
        return redirect()->route('frontend.home');
    }
}
