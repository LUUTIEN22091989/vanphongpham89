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
	<h2>Đăng nhập</h2>
         <?php 
               $message = Session::get('message');
               if ($message) {
               	    echo '<span style="color:red; width:100%;">'.$message.'</span>';
               	    Session::put('message', null);
               }
        ?>
		<form action="" method="post">
			@csrf
			<div>
				<input type="email" class="ggg" name="ad_email" placeholder="E-MAIL">
				@if($errors->has('ad_email'))
	                <span style="color: red;font-size: 15px;width: 100%" class="error-text text-danger">
	                    {{$errors->first('ad_email')}}
	                </span>
	            @endif
            </div>
            <div>
				<input type="password" class="ggg" name="ad_password" placeholder="PASSWORD">
				@if($errors->has('ad_password'))
	                <span style="color: red;font-size: 15px;width: 100%" class="error-text text-danger">
	                    {{$errors->first('ad_password')}}
	                </span>
	            @endif
            </div>
			<span><input type="checkbox" />Nhớ đăng nhập</span>
			<h6><a href="{{ route('admin.reset.pass') }}">Quên mật khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
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
