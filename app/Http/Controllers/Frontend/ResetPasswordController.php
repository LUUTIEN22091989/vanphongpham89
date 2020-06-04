<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequestNewPassword;
use Carbon\Carbon;// DÙNG CHO created_at
use User;
use DB;
use Session;
session_start();

class ResetPasswordController extends Controller
{
    public function getResetPassword(Request $request)
    {
        $title_page = 'Quên mật khẩu';
    	return view('frontend.home.resetPassword', compact('title_page'));
    }

    public function saveNewPass(UserRequestNewPassword $request)
    {
        $email = $request->email;
        $user =  \DB::table('users')->where('email', $email)->first();

        if($user){
            $password = md5($request->passwordNew);
            
            $sql = "UPDATE users SET password = ? WHERE email = ? ";

            $results = DB::update($sql, [
               $password, $email
            ]);

            if ($results) {             
                Session::flash('alert', 'Cập nhật thành công, mời đăng nhập');
                return redirect()->back();
            }

                Session::flash('alert', 'Cập nhật thất bại');
                return redirect()->back();

          }
          Session::flash('alert', 'Email không tồn tại');
          return redirect()->back();
    }
}
