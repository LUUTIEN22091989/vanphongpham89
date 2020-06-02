@extends('layouts.layout_frontend')
@section('content')
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="{{ route('frontend.home')}}">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
                     <span> Liên hệ </span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
	    		<div class="col-sm-7">
	    			<div class="contact-form">
	    				<h2 class="title text-center" style="margin-bottom: 10px;">Thông tin liên hệ</h2>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" action="" method="POST">
				    		@csrf
				            <div class="form-group col-md-6">
				                <input value="{{ Session::get('user_name')}}" type="text" name="c_name" class="form-control" required="required" placeholder="Họ tên...">
				            </div>
				            <div class="form-group col-md-6">
				                <input value="{{ Session::get('user_email')}}" type="email" name="c_email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">
				                <input value="{{ Session::get('user_phone')}}" type="number" name="c_phone" class="form-control" required="required" placeholder="Điện thoại...">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="c_title" class="form-control" placeholder="Tiêu đề">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="c_content" id="" required="required" class="form-control" rows="8" placeholder="Nội dung..."></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="" class="btn btn-primary pull-left" value="Gửi">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-5">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Văn phòng phẩm 89</h2>
	    				<address>
	    					<h4></h4>
							<p>Số 14 Pháo Đài Láng, Đống Đa, Hà Nội</p>
							<p>Hotline: 0942 005 988</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: luutiennc1989@gmail.com</p>
							<div class="fb-page" data-href="https://www.facebook.com/vpp13/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/vpp13/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vpp13/">VĂN PHÒNG PHẨM ONLINE</a></blockquote></div>
							<div style="margin-top: 5px;" class="fb-like" data-href="https://www.facebook.com/vpp13/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
	    				</address>
	    			</div>
    			</div>    			
	    	</div>  
	    </div>
	</section>
@stop