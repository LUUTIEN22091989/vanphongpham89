<?php 

// trang login admin
Route::group(['prefix' => 'auth-admin', 'namespace' => 'Admin\Auth'], function(){
  Route::get('login', 'AdminLoginController@getLogin')->name('get.admin.login');
  Route::post('login', 'AdminLoginController@postLogin');
  Route::get('logout', 'AdminLoginController@getLogout')->name('get.admin.logout');
  //quên mật khẩu
  Route::get('quen-mat-khau', 'AdminLoginController@adminResetPassword')->name('admin.reset.pass');
  Route::post('quen-mat-khau', 'AdminLoginController@adminNewPassword')->name('admin.new.pass');
});

// giao dien trang admin
Route::group(['prefix' => 'app-admin', 'namespace' => 'Admin', 'middleware' => 'check_admin_login'], function(){
	Route::get('/', function(){
        return view('admin.home.index');
	});
		// danh mục
	Route::group(['prefix' => 'category'], function(){
         Route::get('', 'AdminCategoryController@index')->name('admin.category.index');
         Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
        Route::post('create', 'AdminCategoryController@store');
        Route::get('update/{id}', 'AdminCategoryController@edit')->name('admin.category.update');
        Route::post('update/{id}', 'AdminCategoryController@update');
        Route::get('delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');
        Route::get('status/{id}', 'AdminCategoryController@status')->name('admin.category.status');
        Route::get('hot/{id}', 'AdminCategoryController@hot')->name('admin.category.hot');
	});
        // sản phẩm
        Route::group(['prefix' => 'product'], function(){
           Route::get('', 'AdminProductController@index')->name('admin.product.index');
           Route::get('create', 'AdminProductController@create')->name('admin.product.create');
           Route::post('create', 'AdminProductController@store');
           Route::get('update/{id}', 'AdminProductController@edit')->name('admin.product.update');
           Route::post('update/{id}', 'AdminProductController@update');
           Route::get('delete/{id}', 'AdminProductController@delete')->name('admin.product.delete');
           Route::get('status/{id}', 'AdminProductController@status')->name('admin.product.status');
           Route::get('hot/{id}', 'AdminProductController@hot')->name('admin.product.hot');
           
        });
        //trang người quản trị
        Route::group(['prefix' => 'admin'], function(){
            Route::get('', 'AdminController@index')->name('admin.index');
            Route::get('create', 'AdminController@create')->name('admin.create');
            Route::post('create', 'AdminController@store');
            Route::get('update/{id}', 'AdminController@edit')->name('admin.update');
            Route::post('update/{id}', 'AdminController@update');
            Route::get('delete/{id}', 'AdminController@delete')->name('admin.delete');
            Route::get('active/{id}', 'AdminController@active')->name('admin.active');
        });
        // trang cuppon
        Route::group(['prefix' => 'cuppon'], function(){
            Route::get('', 'AdminCupponController@index')->name('admin.cuppon.index');
            Route::get('create', 'AdminCupponController@create')->name('admin.cuppon.create');
            Route::post('create', 'AdminCupponController@store');
            Route::get('delete/{id}', 'AdminCupponController@delete')->name('admin.cuppon.delete');;
        });
        // trang đơn hàng
      Route::group(['prefix' => 'transaction'], function(){
          Route::get('', 'AdminTransactionController@index')->name('admin.transaction.index');
          Route::get('delete/{id}', 'AdminTransactionController@delete')->name('admin.transaction.delete');
          //xử lý action đơn hàng tiếp nhận hay đã bàn giao
          Route::get('action/{action}/{id}', 'AdminTransactionController@getAction')->name('admin.action.transaction');
          //show đơn hàng chỗ nut view
          Route::get('view-transaction/{id}', 'AdminTransactionController@getTransactionShow')->name('admin.transaction.show');
          //xóa chi tiết đơn hàng trong từng đơn hàng khi show
          Route::get('order-delete/{id}', 'AdminTransactionController@deleteOrderItem')->name('admin.transaction.delete.order_item');
          // in đơn hàng PDF
          Route::get('in-don-hang/{id}', 'AdminTransactionController@printTransaction')->name('admin.print.transaction');
            });
         // xử lý admin cho rating
      Route::group(['prefix' => 'rating'], function(){
                  Route::get('', 'AdminRatingController@index')->name('admin.rating.index');
                  Route::get('delete/{id}', 'AdminRatingController@delete')->name('admin.rating.delete');
                  Route::get('active/{id}', 'AdminRatingController@active')->name('admin.rating.active');
              });
          // xử lý admin cho liên hệ
      Route::group(['prefix' => 'contact'], function () {
            Route::get('', 'AdminContactController@index')->name('admin.contact.index');
            Route::get('delete/{id}', 'AdminContactController@delete')->name('admin.contact.delete');
            Route::get('active/{id}', 'AdminContactController@active')->name('admin.contact.active');
            Route::get('active/{id}', 'AdminContactController@active')->name('admin.contact.active');

             });
  })

 ?>