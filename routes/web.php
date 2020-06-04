<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Frontend'], function(){

	//đăng ký
	Route::get('dang-ky', 'RegisterController@getFormRegister')->name('get.register');
	Route::post('dang-ky', 'RegisterController@postRegister')->name('post.register');
	//đăng nhập
	Route::get('dang-nhap', 'LoginController@getFormLogin')->name('get.login');
	Route::post('dang-nhap', 'LoginController@postLogin');
	// đăng xuất
    Route::get('dang-xuat', 'LoginController@getLogout')->name('get.logout');
    //quên mật khẩu
	Route::get('mat-khau-moi', 'ResetPasswordController@getResetPassword')->name('get.reset.password');
	Route::post('mat-khau-moi', 'ResetPasswordController@saveNewPass')->name('post.new.pass');


	//trang chủ
   Route::get('', 'HomeController@index')->name('frontend.home');
   //Trang tìm kiếm sản phẩm trên thanh search
   Route::get('search', 'HomeController@searchProduct')->name('search.product');
   // sp theo từng danh mục
   Route::get('danh-muc/{slug}', 'ProductController@index')->name('get.productByCategory');
   //Trang chi tiết sản phẩm
   Route::get('san-pham/{slug}', 'ProductDetailController@getProductDetail')->name('get.ProductDetail');

   //Thêm sp vào giỏ hàng
	Route::get('them-vao-gio-hang/{id}', 'ShoppingCartController@addShoppingCart')->name('get.ShoppingCart');
	// giao diện trang danh sách đơn hàng
	Route::get('don-hang', 'ShoppingCartController@index')->name('get.shopping.list');
	// xóa sp khỏi đơn hàng bằng ajax
	Route::get('delete/{id}', 'ShoppingCartController@delete')->name('ajax.shopping.delete');
	// update số lượng bằng ajax
	Route::get('update/{id}', 'ShoppingCartController@update')->name('ajax.update.qty');
	// nhập mã giảm giá bằng ajax
	Route::get('check-cuppon', 'ShoppingCartController@checkCuppon')->name('get.check.cuppon');
	// xóa mã khi ko dùng nưa ajax
	Route::get('delete-cuppon', 'ShoppingCartController@deleteCuppon')->name('get.delete.cuppon');
	// thanh toán
	Route::post('thanh-toan', 'ShoppingCartController@postPay')->name('post.shopping.pay');
	// đánh giá sản phẩm
    Route::post('danh-gia/{id}','RatingController@postRating')->name('post.rating.product');
     // show toàn bộ tin tức
    Route::get('tin-tuc', 'NewsController@index')->name('get.news.list');
     // chi tiết bài viết
    Route::get('chi-tiet-bai-viet/{slug}', 'ArticleDetailController@getArticleDetail')->name('get.article.detail');
    //Liên hệ
	 Route::get('lien-he','ContactController@index')->name('get.contact');
	 Route::post('lien-he','ContactController@store');
	// khách hàng đăng ký nhận tin
	 Route::post('dang-ky-nhan-tin', 'HomeController@customerRegister')->name('post.customerRegister');
	 // các page thông tin chung
	 Route::get('{slug}', 'HomeController@pageStatic')->name('get.page.static');


});

include 'route_admin.php';
include 'route_user.php';