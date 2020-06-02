<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;  // dùng cho slug
use Carbon\Carbon;// DÙNG CHO created_at
use App\Models\Product;
use App\Models\Cuppon;
use App\Models\UserCuppon;
use App\Models\Transaction;
use App\Models\Order;
use Session;
session_start();

class ShoppingCartController extends Controller
{
	// trang đơn hàng
	public function index(Request $request)
	{
        
		$shopping = \Cart::content();
		$viewData = [
            'shopping'     => $shopping,
            'title_page' => "Giỏ hàng"
        ];

		return view('frontend.shopping.index', $viewData);
	}

    public function addShoppingCart($id)
    {
		$product = Product::find($id);
           //1 kiểm tra tồn tại sp
    	if (!$product){ // ko tồn tại sp thì vè trang chủ
    		return redirect()->route('get.home');
    	};

         //2 so sánh số lượng đặt mua vs sô lượng tồn kho
    	if ($product->pro_number < 1) { // số lượng = 0 thì thông báo
    		Session::flash('alert', 'Sản phẩm đã hết hàng, vui lòng thêm sản phẩm khác');
    		return redirect()->back();
    	}
        if ( !$product->pro_price) { // vs sản phẩm chưa có giá bán
            Session::flash('alert', 'Vui lòng liên hệ với siêu thị');
            return redirect()->back();
        }

    	 //3 add vào giỏ hàng
    	\Cart::add([
    		'id'      => $product->id, 
    		'name'    => $product->pro_name, 
    		'qty'     => 1, 
    		'price'   => $this->number_price($product->pro_price, $product->pro_sale),
    		'weight'  => '1', 
    		'options' => [
    			'image'      => $product->pro_image,
    			'sale'       =>  $product->pro_sale
    		]
    	]);

	        Session::flash('alert', 'Thêm giỏ hàng thành công');
	    	return redirect()->route('get.shopping.list');
    }

    //update và xóa giỏ hàng bằng Ajax//////////////////////////////////////////////
    public function update(Request $request, $rowID) //$id chính là $key
    {
        if ($request->ajax()) {
            //1 lấy tham số
              $qty = $request->qty ?? 1;
              $idProduct = $request->idProduct;
              $product = Product::find($idProduct);
              // 2, ktra 
                 if ($product->pro_number < $qty) { // sp có tồn tại nhưng slg đặt > slg có trong db -> bao lỗi
                        return response(['messages' => 'Sô lượng cập nhật không đủ']);
                   }
                   
              //3 update số lượng
              \Cart::update($rowID, $qty);
              return response(['messages' => 'Bạn có muốn thay đổi?']);
          }
          
    }
     // xóa sp khỏi đơn hàng bằng ajax
    public function delete(Request $request, $rowID)
    {
        if ($request->ajax()) {
            \Cart::remove($rowID);
            return response(['messages' => 'Bạn có chắc chắn muốn xóa khỏi giỏ hàng ?']);
        }
    }

     // hàm tính theo giá sp sau khi sale
    public function number_price($price, $sale=0 )
    {
        if ($sale == 0) {
                return $price;
            }else {
                $price = ((100-$sale)*$price)/100;
                return $price;
            }
    }

    // nhập mã giảm giá
    public function checkCuppon(Request $request)
    {
        if ($request->ajax()) {
                if (Session::get('user_id')) { // cuppon chỉ dùng cho tk đã đăng ký
                    $cupponCode = $request->cupponCode;
                    $cuppon = Cuppon::where('cp_code', $cupponCode)->first();
                    
                    if ($cuppon) {
                        //check nếu user đã sử dụng rồi thì báo lỗi chỉ sử dụng 1 lần
                        $user_cuppon = UserCuppon::where([
                            'uc_user_id'     => Session::get('user_id'),
                            'uc_cuppon_code' => $cuppon['cp_code']
                        ])->first();
                        //nếu tồn tại thì báo chỉ sử dụng 1 lần
                        if($user_cuppon){
                             return response(['messages' => 'Bạn chỉ được dùng mã 1 lần ?']);
                        }else{
                                if ($cuppon['cp_stock'] > 0) {
                                    $tst_total_money = str_replace(',', '', \Cart::subtotal() );

                                    if ($cuppon['cp_condition'] == 0) {
                                        $total_money_cuppon = $tst_total_money -( ( $tst_total_money * $cuppon['cp_number'] ) / 100 );
                                    }elseif ($cuppon['cp_condition'] == 1) {
                                        $total_money_cuppon =  $tst_total_money - $cuppon['cp_number']  ;
                                    }
                                    
                                    Session::put('cp_code', $cuppon['cp_code'] );
                                    Session::put('cp_condition', $cuppon['cp_condition'] );
                                    Session::put('cp_number', $cuppon['cp_number'] );
                                    Session::put('total_money_cuppon', $total_money_cuppon );

                                    return response(['messages' => 'Cập nhật thành công']);
                                }
                                    return response(['messages' => 'Mã giảm giá đã hết']);
                            
                        }
                    }
                            return response(['messages' => 'Mã giảm giá không tồn tại']);
                }

                   return response(['messages' => 'Bạn cần đăng nhập']);

        }

    }

    // xóa mã giảm giá khi ko dùng nữa
        public function deleteCuppon(Request $request)
        {
            if ($request->ajax()) {
                $cp_code = $request->cupponCode;
                if ($cp_code) {
                    Session::forget('cp_code');
                    Session::forget('cp_number');
                    Session::forget('cp_condition');
                    Session::forget('total_money_cuppon');
                    return response(['messages' => 'Xóa mã thành công']);
                }
            }
        }

    // thanh toán
    public function postPay(Request $request)
    {

        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $data['tst_code'] = 'DH-'.$data['tst_name'].'-'.date('d').date('m').date('Y');

        if (Session::get('cp_code')) { // nếu tồn tại mã giảm giá
            $data['tst_total_money'] = str_replace(',', '', Session::get('total_money_cuppon') );
            $data['tst_code_cuppon'] = Session::get('cp_code');

        }else { // ko dùng mã giảm giá
            $data['tst_total_money'] = str_replace(',', '', \Cart::subtotal() );
        }
        

        // nếu tồn tại tài khoản đăng nhập
        if (Session::get('user_id')) {
          if (Session::get('cp_code')) {
              $data['tst_user_id'] = Session::get('user_id');
              //Lưu user và code cuppon vào DB để quản lý sử dụng
              UserCuppon::insert([
                  'uc_user_id'     => Session::get('user_id'),
                  'uc_cuppon_code' => Session::get('cp_code'),
                  'created_at'     => Carbon::now()
              ]); 
          }
        }
        
        $transactionID = Transaction::insertGetId($data);
         // nếu thah toán thành công
        if ($transactionID) {
            $shopping = \Cart::content();
           
            foreach ($shopping as $key => $item) {
                //Lưu chi tiết đơn hàng vào DB
                Order::insert([
                    'od_transaction_id' => $transactionID,
                    'od_product_id'     => $item->id,
                    'od_sale'           => $item->options->sale,
                    'od_qty'            => $item->qty,
                    'od_price'          => $item->price,
                    'created_at'        => Carbon::now()
                ]);
            }      
            // giảm cột cp_stock 1 đơn vị 
              \DB::table('cuppons')->where('cp_code', Session::get('cp_code'))->decrement('cp_stock');
         }

        // khi thanh toán thành công thì hủy luôn đơn hàng trong giỏ hàng
        \Cart::destroy();
        Session::forget('total_money_cuppon'); //hủy session sau khi thanh toán
        Session::forget('cp_number'); 
        Session::forget('cp_condition'); 
        Session::forget('cp_code'); 
        Session::flash('alert', 'Đặt mua thành công, chúng tôi sẽ liên hệ lại với bạn');

        return redirect()->route('frontend.home');
    }

}
