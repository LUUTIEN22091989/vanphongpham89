@extends('user.app_master_user')
@section('content')
    <section class="py-lg-3" style="background: white; padding: 20px">
        <h2>Thay đổi mật khẩu</h2>
        <div class="row mb-5">
          <div class="col-sm-6 col-sm-offset-3">
          	 <form action ="{{ route('post.savePass') }}" method="POST">
          	 	@csrf
				  <div class="form-group">
				    <label for="">Mật khẩu mới</label>
				    <input type="password" class="form-control" name="passwordNew" value="" placeholder="Nhập..."> <!-- check nếu đăng nhập mới vào dc trang cập nhật -->
				    @if ($errors->first('passwordNew'))
			                        <span class="text-danger">{{ $errors->first('passwordNew') }}</span>
			         @endif
				  </div>
				  <div class="form-group">
				    <label for="">Nhập lại mật khẩu</label>
				    <input type="password" class="form-control" name="password_confirm" value="" placeholder="Nhập ..."> <!-- check nếu đăng nhập mới vào dc trang cập nhật -->
				    @if ($errors->first('password_confirm'))
			                        <span class="text-danger">{{ $errors->first('password_confirm') }}</span>
			         @endif
				  </div>
				  <!-- <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div> -->
				  <button type="submit" class="btn btn-primary">Cập nhật</button>
				  @if (Session::has('alert'))
						<div role="alert" class="alert alert-success text-center" style="font-size: 15px; color: blue;margin-top: 10px;">{{Session::get('alert')}}</div>
					@endif
		   </form>
          </div>
        </div>
    </section>
@stop