<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Trang quản lý Admin - Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="/admin/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="/admin/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="/admin/css/font.css" type="text/css"/>
<link href="/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="/admin/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Mật khẩu mới</h2>
         @if (Session::has('alert'))
                        <div role="alert" class="alert alert-success text-center" style="font-size: 15px; color: red;margin-bottom: 0px;">{{Session::get('alert')}}</div>
         @endif
		<form action="" method="post">
			@csrf
			<div>
				<input type="email" class="ggg" name="email" placeholder="Email đăng nhập...">
				@if($errors->has('email'))
	                <span style="color: red;font-size: 15px;width: 100%" class="error-text text-danger">
	                    {{$errors->first('email')}}
	                </span>
	            @endif
            </div>
            <div>
				<input type="password" class="ggg" name="passwordNew" placeholder="Password mới....">
				@if($errors->has('passwordNew'))
	                <span style="color: red;font-size: 15px;width: 100%" class="error-text text-danger">
	                    {{$errors->first('passwordNew')}}
	                </span>
	            @endif
            </div>
            <div>
				<input type="password" class="ggg" name="password_confirm" placeholder="Nhập lại password...">
				@if($errors->has('password_confirm'))
	                <span style="color: red;font-size: 15px;width: 100%" class="error-text text-danger">
	                    {{$errors->first('password_confirm')}}
	                </span>
	            @endif
            </div>
            <div style="display: flex;">			
                 <input class="btn btn-lg btn-primary" type="submit" value="Cập nhật" name="">
                 <a style="margin: 45px auto 31px" class="btn btn-primary btn-lg" href="{{ route('get.admin.login') }}">Đăng nhập</a>
            </div>	
		</form>
</div>
</div>
<script src="/admin/js/bootstrap.js"></script>
<script src="/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/admin/js/scripts.js"></script>
<script src="/admin/js/jquery.slimscroll.js"></script>
<script src="/admin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/admin/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="/admin/js/jquery.scrollTo.js"></script>
</body>
</html>
