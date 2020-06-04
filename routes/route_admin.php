<?php 

//file manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'check_admin_login'], function(){
  \UniSharp\LaravelFilemanager\Lfm::routes();
});

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
  //trang setting
Route::group(['prefix' => 'setting'], function(){
    Route::get('', 'AdminSettingController@index')->name('admin.setting.index');
    Route::get('create', 'AdminSettingController@create')->name('admin.setting.create');
    Route::post('create', 'AdminSettingController@store');
    Route::get('update/{id}', 'AdminSettingController@edit')->name('admin.setting.update');
    Route::post('update/{id}', 'AdminSettingController@update');
    Route::get('delete/{id}', 'AdminSettingController@delete')->name('admin.setting.delete');
    Route::get('status/{id}', 'AdminSettingController@status')->name('admin.setting.status');
});
  // thống kê
  Route::get('statistical', 'AdminStatisticalController@index')->name('admin.statistical.index');
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
           //xóa ảnh trong album
            Route::get('delete-image/{id}', 'AdminProductController@deleteImageAlbum')->name('admin.product.delete_image');
                   
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
            // article
      Route::group(['prefix' => 'article'], function(){
        Route::get('', 'AdminArticleController@index')->name('admin.article.index');
        Route::get('create', 'AdminArticleController@create')->name('admin.article.create');
        Route::post('create', 'AdminArticleController@store');
        Route::get('update/{id}', 'AdminArticleController@edit')->name('admin.article.update');
        Route::post('update/{id}', 'AdminArticleController@update');
        Route::get('delete/{id}', 'AdminArticleController@delete')->name('admin.article.delete');
        Route::get('active/{id}', 'AdminArticleController@active')->name('admin.article.active');
        Route::get('hot/{id}', 'AdminArticleController@hot')->name('admin.article.hot');
      });

           // xử lý admin cho slide
    Route::group(['prefix' => 'slide'], function(){
            Route::get('', 'AdminSlideController@index')->name('admin.slide.index');
             Route::get('create', 'AdminSlideController@create')->name('admin.slide.create');
            Route::post('create', 'AdminSlideController@store');
            Route::get('update/{id}', 'AdminSlideController@edit')->name('admin.slide.update');
            Route::post('update/{id}', 'AdminSlideController@update');
            Route::get('delete/{id}', 'AdminSlideController@delete')->name('admin.slide.delete');
            Route::get('active/{id}', 'AdminSlideController@active')->name('admin.slide.active');
        });
    // các page thong tin chung
       Route::group(['prefix' => 'static'], function(){
        Route::get('', 'AdminPageStaticController@index')->name('admin.static.index');
        Route::get('create', 'AdminPageStaticController@create')->name('admin.static.create');
        Route::post('create', 'AdminPageStaticController@store');
        Route::get('update/{id}', 'AdminPageStaticController@edit')->name('admin.static.update');
        Route::post('update/{id}', 'AdminPageStaticController@update');
        Route::get('delete/{id}', 'AdminPageStaticController@delete')->name('admin.static.delete');
        Route::get('active/{id}', 'AdminPageStaticController@active')->name('admin.static.active');
      });
  })

 ?>