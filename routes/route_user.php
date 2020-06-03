<?php 

Route::group(['prefix' => 'tai-khoan','namespace' => 'User', 'middleware' => 'check_user_login'], function(){
  Route::get('', 'UserController@index')->name('get.user.index');

  Route::get('update-thong-tin', 'UserController@updateInfo')->name('get.user.update_info');
  Route::post('update-thong-tin', 'UserController@saveInfo');

  // đổi mật khẩu
  Route::get('update-mat-khau', 'UserController@updatePassword')->name('get.user.update_pass');
  Route::post('update-mat-khau', 'UserController@postSavePassword')->name('post.savePass');

  Route::get('quan-ly-don-hang', 'UserController@transaction')->name('get.user.transaction');
});








 ?>