<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestRegister;
use Carbon\Carbon;// DÙNG CHO created_at
use App\User;
use Session;
session_start();

class RegisterController extends Controller
{
    public function getFormRegister(Request $request)
    {
        $title_page = 'Đăng ký';
    	return view('frontend.home.register', compact('title_page'));
    }

    public function postRegister(RequestRegister $request)
    {
    	$data = $request->except('_token');
        $data['password']   = md5($data['password']);
        $data['created_at'] = Carbon::now();

        $id = User::insertGetId($data); // insert vào bảng users và lấy  luôn id

        if ($id) {
            Session::flash('alert', 'Đăng ký thành công, mời đăng nhập');
            return redirect()->route('get.login');
        }
            Session::flash('alert', 'Đăng ký thất bại');
            return redirect()->back();
    }
}
