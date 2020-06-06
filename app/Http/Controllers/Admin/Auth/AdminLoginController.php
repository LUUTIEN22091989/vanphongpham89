<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestAdminLogin;
use App\Http\Requests\AdminRequestNewPassword;
use Carbon\Carbon;// DÙNG CHO created_at
use User;
use DB;
use Session;
session_start();

class AdminLoginController extends Controller
{
    // trang login admin
    public function getLogin()
    {
    	return view('admin.homeAdmin.login');
    }
    // đăng nhập
    public function postLogin(RequestAdminLogin $request)
    {
    	$email    = $request->ad_email;
    	$password = md5($request->ad_password);

    	$admin     = DB::table('admins')->where([ 
            'ad_email'    => $email , 
            'ad_password' => $password,
            'ad_active'   => 1 
        ])->first();

        if ($admin) {
        	   Session::put('ad_name', $admin->ad_name);
        	   Session::put('ad_id', $admin->id);
    	       return redirect()->route('admin.statistical.index');
        }else {
        	   Session::put('message', 'Mật khẩu hoặc tài khoản không đúng,vui lòng kiểm tra lại');

               return redirect()->back();
        }
    }
    // đăng xuất
    public function getLogout()
    {
          Session::flush();

          return redirect()->route('get.admin.login');
    }
    //quên mk
    public function adminResetPassword()
    {
        return view('admin.homeAdmin.resetAdminPassword');
    }

    public function adminNewPassword(AdminRequestNewPassword $request)
    {
        $email = $request->email;
        $admin =  \DB::table('admins')->where('ad_email', $email)->first();

        if($admin){
            $password = md5($request->passwordNew);
            
            $sql = "UPDATE admins SET ad_password = ? WHERE ad_email = ? ";

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
