<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\RequetsPassword;
use App\User;
use App\Models\Transaction;
use Session;
use DB;
session_start();

class UserController extends Controller
{
    public function index()
    {
      $totalTransaction = Transaction::where('tst_user_id', Session::get('user_id'))->select('id')->count();
      $totalTransactionCancel = Transaction::where('tst_user_id', Session::get('user_id'))->where('tst_status', 3)->select('id')->count();
      $totalTransactionDefaul = Transaction::where('tst_user_id', Session::get('user_id'))->where('tst_status', 1)->select('id')->count();
      $totalTransactionSuccess = Transaction::where('tst_user_id', Session::get('user_id'))->where('tst_status', 2)->select('id')->count();

      $viewData = [
        'totalTransaction'=> $totalTransaction,
        'totalTransactionCancel' => $totalTransactionCancel,
        'totalTransactionDefaul' => $totalTransactionDefaul,
        'totalTransactionSuccess' => $totalTransactionSuccess

      ];
    	return view('user.home.index', $viewData);
    }
   
   // update thông tin
    public function updateInfo()
   {
   	  return view('user.home.update_info');
   }
   public function saveInfo(Request $request)
   { 
   	   $data = $request->except('_token');
    	$user = User::find(Session::get('user_id'));
        $user->update($data);
        
        Session::flash('alert', 'Cập nhật thành công');
        return redirect()->back();
   }

   // thay đổi mật khẩu
   public function updatePassword()
   {
   	  return view('user.home.update_pass');
   }

   public function postSavePassword(RequetsPassword $request)
   {
            $password = md5($request->passwordNew);
            
            $sql = "UPDATE users SET password = ? WHERE id = ? ";

            $results = DB::update($sql, [
               $password, Session::get('user_id')
            ]);

            if ($results) {             
                Session::flash('alert', 'Cập nhật thành công');
                return redirect()->back();
            }

                Session::flash('alert', 'Cập nhật thất bại');
                return redirect()->back();

   }
   // đon hàng
    public function transaction(Request $request)
    {
    	$transactions = Transaction::where('tst_user_id', Session::get('user_id'));
    	//lọc theo id
    	if ($request->id) {
    		$transactions->where('id', $request->id);
    	}
    	// lọc theo trạng thái đơn hàng
            if ($status = $request->status) {
                $transactions->where('tst_status', $status);
            }

    	$transactions = $transactions->orderByDesc('id')->get();
    	$viewData     = [
    		'transactions' => $transactions
    	];

    	return view('user.home.transaction', $viewData);
    }
}
