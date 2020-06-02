@extends('layouts.layout_frontend')
@section('content')
<section class="main-content-section">
    <div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                <!-- BSTORE-BREADCRUMB START -->
	                <div class="bstore-breadcrumb">
	                    <a href="{{ route('frontend.home')}}">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
	                    <span> &nbspĐăng nhập </span>
	                </div>
	                <!-- BSTORE-BREADCRUMB END -->
	            </div>
	        </div>
	        <div class="row">
				<div class="col-sm-4 col-sm-offset-4" style="margin-bottom: 30px">
					<div class="login-form"><!--login form-->
						<form action="" method="post">
							@csrf
						  <div class="form-group">
						    <label for="email">Email address</label>
						    <input required="" type="email" class="form-control" name="email" id="email" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input required="" type="password" class="form-control" name="password" id="password" placeholder="Password">
						  </div>
						  <div class="form-group">
							  <button style="margin-bottom: 5px;" type="submit" class="btn btn-primary">Đăng nhập</button>
						  </div>
							  <a href="{{ route('get.reset.password') }}">Quên mật khẩu?</a>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>
@stop