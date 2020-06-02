@extends('layouts.layout_frontend')
@section('content')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <!-- BSTORE-BREADCRUMB START -->
	                <div class="bstore-breadcrumb">
	                    <a href="{{ route('frontend.home')}}">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
	                    <span> &nbspMật khẩu mới</span>
	                </div>
	                <!-- BSTORE-BREADCRUMB END -->
	            </div>
	        </div>
	        <div class="row">
				<div class="col-sm-4 col-sm-offset-4" style="margin-bottom: 30px">
					<div class="login-form"><!--login form-->
						<form action="{{ route('post.new.pass') }}" method="POST">
							@csrf
						  <div class="form-group">
							    <label for="email">Email đăng nhập</label>
							    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ old('email') }}">
							    @if($errors->has('email'))
	                                <span class="error-text text-danger">
	                                    {{$errors->first('email')}}
	                                 </span>
	                            @endif
	                        </div>
						  <div class="form-group">
			                    <label for="passwordNew">Mật khẩu mới <span class="text-danger">(bắt buộc)</span></label>
			                    <input name="passwordNew" type="password" class="form-control" placeholder="********">
			                    @if ($errors->first('passwordNew'))
			                        <span class="text-danger">{{ $errors->first('passwordNew') }}</span>
			                    @endif
			                </div>
			                <div class="form-group">
			                    <label for="password_confirm">Xác nhận mật khẩu <span class="text-danger">(bắt buộc)</span></label>
			                    <input name="password_confirm" type="password" class="form-control" placeholder="********">
			                    @if ($errors->first('password_confirm'))
			                        <span class="text-danger">{{ $errors->first('password_confirm') }}</span>
			                    @endif
			                </div>

			                <div class="form-group" style="display: flex;">
			                    <button class="btn btn-primary">Cập nhật</button>
			                    <a style="margin-left: 10px" href="{{ route('get.login')}}" class="btn btn-primary" href="">Đăng nhập</a>
			                </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@stop