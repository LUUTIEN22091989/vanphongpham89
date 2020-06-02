@extends('layouts.layout_frontend')
@section('content')
<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{ route('frontend.home') }}">Trang chủ</a>
							<span><i class="fa fa-caret-right"></i></span>
							<span>Giỏ hàng</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">	
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">						<!-- SHOPING-CART-MENU END -->
						<!-- CART TABLE_BLOCK START -->
						<div class="table-responsive">
							<!-- TABLE START -->
							<table class="table table-bordered" id="cart-summary">
								<!-- TABLE HEADER START -->
								<thead>
									<tr>
										<th class="cart-product">Hình ảnh</th>
										<th class="cart-description">Sản phẩm</th>
										<th class="cart-unit text-right">Gía</th>
										<th class="cart_quantity text-center">Số lượng cần mua</th>
										<th class="cart-delete">&nbsp;</th>
										<th class="cart-total text-right">Total</th>
									</tr>
								</thead>
								<!-- TABLE HEADER END -->
								<!-- TABLE BODY START -->
								<tbody>	
									<!-- SINGLE CART_ITEM START -->
									@foreach( $shopping as $key => $item)
									<tr>
										<td class="cart-product">
											<a href="{{ route('get.ProductDetail', $item->name.'-'.$item->id )}}"><img alt="Blouse" src="{{ $item->options->image }}"></a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="{{ route('get.ProductDetail', $item->name.'-'.$item->id )}}">{{ $item->name }}</a></p>
										</td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price">{{ number_format($item->price) }}đ</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<div class="">
												<input class="cart-plus-minus js-update-qty" type="text" min="0" value="{{ $item->qty }}" data-id-product="{{ $item->id }}" data-url="{{ route('ajax.update.qty', $key)}}">
											</div>
										</td>
										<td class="cart-delete text-center">
											<span>
												<a href="{{ route('ajax.shopping.delete', $key) }}" class="cart_quantity_delete js-delete-cart" title="Delete"><i class="fa fa-trash-o"></i></a>
											</span>
										</td>
										<td class="cart-total">
											<span class="price">{{ number_format($item->price * $item->qty ) }}đ</span>
										</td>
									</tr>
									@endforeach
									<!-- SINGLE CART_ITEM END -->
								</tbody>
								<!-- TABLE BODY END -->
								<!-- TABLE FOOTER START -->
								<tfoot>										
									<tr class="cart-total-price">
										<td style="border: 1px;" class="cart_voucher" colspan="2" rowspan="4"></td>
										<td class="text-right" colspan="3">Tạm tính</td>
										<td id="total_product" class="price" colspan="1">{{ Cart::subtotal(0) }}đ</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Mã giảm giá ( Nếu có )
											<span>
												<form action="{{ route('post.check.cuppon') }}" method="post">
													@csrf
														<input type="text" class="form-control" value="{{ Session::get('cp_code') ?? 0 }}" name="cuppon">
														<button style="margin-top: 5px;"  type="submit" name="" class="btn btn-sm btn-primary">Cập nhật</button>
														@if(Session::get('cp_code'))
														<a href="{{ route('get.delete.cuppon') }}" class="bt btn-sm btn-success">Xóa mã</a>
														@endif

												</form>
											</span>
										</td>
										<td id="total_shipping" class="price" colspan="1">
											<span>
											@if(Session::get('cp_condition') == 0 )
											 -{{  Session::get('cp_number') }}%
											@elseif(Session::get('cp_condition') == 1)
											 -{{  Session::get('cp_number') }}đ
											@endif
											</span>
										</td>
										</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Thanh toán</td>
										<td class="price" colspan="1">
											@if(Session::get('total_money_cuppon'))
											<span>{{ number_format(Session::get('total_money_cuppon')) }}đ 
											</span>
											@else
											 <span>
											 	{{ Cart::subtotal(0) }}đ
											 </span>
											@endif
										</td>
									</tr>
								</tfoot>		
								<!-- TABLE FOOTER END -->									
							</table>
							<!-- TABLE END -->
						</div>
						<!-- CART TABLE_BLOCK END -->
					</div>
				</div>
				<div class="row" id="do_action">
					<div class="col-sm-12 col-xs-12 col-md-6 col-md-offset-3" style="border: 1px solid #e8d3d3; padding: 20px;">
						<h2>Nhập thông tin khách hàng:</h2>
						<form action="{{ route('post.shopping.pay') }}" method="post">
							@csrf
						    <div class="form-group" style="margin-top: 10px;">
						        <label for="tst_name">Họ tên</label>
						        <input required="" type="text" class="form-control" name="tst_name" id="name" placeholder="Họ tên" value="{{Session::get('user_name')}}">
						    </div>
						    <div class="form-group">
						        <label for="tst_email">Email</label>
						        <input required="" type="email" class="form-control" name="tst_email" id="tst_email" placeholder="Email" value="{{Session::get('user_email')}}">
						    </div>
						    <div class="form-group">
						        <label for="tst_phone">Số điện thoại</label>
						        <input required="" type="number" class="form-control" name="tst_phone" id="tst_phone" placeholder="Số điện thoại" value="{{Session::get('user_phone')}}">
						    </div>
						    <div class="form-group">
						        <label for="tst_address">Địa chỉ nhận</label>
						        <input required="" type="text" class="form-control" name="tst_address" id="tst_address" placeholder="Address">
						    </div>
						    <div class="form-group">
						        <label for="tst_note">Ghi chú</label>
						        <textarea type="text" class="form-control" rows="5" name="tst_note" id="tst_note" placeholder="Note"></textarea>
						    </div>
						    <div class="form-group">
				                     <label for="tst_type">Chọn hình thức thanh toán</label>
				                     <select required="" name="tst_type"  class="form-control">
				                     	<option>--Chọn 1 hình thức--</option>
				                        <option value="0">Chuyển khoản</option>
				                        <option value="1">Tiền mặt</option>   
				                    </select>
				            </div>
						    <button style="margin-bottom: 10px" type="submit" class="btn btn-primary">Đặt mua</button>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
@stop

@section('script')
   <script type="text/javascript">
	   $(function(){
	   	 	//update số lượng khi mua
	   	 	$(".js-update-qty").change(function(event){
	   	 		console.log('111');
	   	 		event.preventDefault();
	   	 		let $this = $(this);
	   	 		let URL    = $(this).attr('data-url'); //lấy link sp cần update số lượng
	   	 	    let qty = $(this).val();// lấy slg khi nhập vào thẻ input 
	    		let idProduct = $(this).attr('data-id-product') // lấy id của sp
console.log(URL);
	    			if (URL) {
	                    $.ajax({
	                        url: URL,
	                        data: { qty: qty, idProduct : idProduct }
	                    }).done(function(results){
	                    	alert(results.messages);
	                        window.location.reload(); //web tự load lại au khi nhấn cập nhật
	                    });
	                }
	   	 	})
	   	 })

   </script>
   <!-- Xóa sp khỏi giỏ hàng -->
   <script type="text/javascript">
		   	$(function(){
			   	 	//xóa sp khỏi giỏ hàng
			   	 	$(".js-delete-cart").click(function(event){
			   	 		event.preventDefault();
			   	 		let $this = $(this);
			   	 		let url    = $(this).attr('href'); //lấy link sp cần update số lượng
			    			if (url) {
			                    $.ajax({
			                        url: url,
			                    }).done(function(results){
			                    	alert(results.messages);
			                        window.location.reload(); //web tự load lại au khi nhấn cập nhật
			                    });
			                }
			   	 	})
   	})
   </script>
@stop