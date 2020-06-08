@extends('layouts.layout_frontend')

@section('css')
<style type="text/css">
    .bx-controls-direction{
        margin-top: -20px;
    }
</style>
@stop

@section('content')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb col-xs-12 col-sm-6 col-md-6" style="background: #0562fd;padding: 10px;">
                    <a style="color: white" href="{{ route('frontend.home')}}">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
                    <span> <i class="fa fa-caret-right"> </i> </span>
                    <a style="color: white" href="{{ route('get.productByCategory', $category->c_slug.'-'.$category->id)}}"> {{ $category->c_name }} </a>
                    <span style="color: white"> {{$product->pro_name}} </span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <!-- SINGLE-PRODUCT-DESCRIPTION START -->
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                        <div class="single-product-view">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="thumbnail_1">
                                    <div class="single-product-image">
                                        <img style="height: 350px;width: 100%" src="{{ asset($product->pro_image)}}" alt="{{$product->pro_name}}" />
                                        @if( $product->pro_sale)
                                            <a href="{{ route('get.ProductDetail', $product->pro_slug.'-'.$product->id )}}" class="new-mark-box" style="font-size: 13px;">-{{ $product->pro_sale}}%</a>
                                        @endif                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="select-product">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs select-product-tab bxslider">
                                <li class="image-room active">
                                    <img style="cursor: pointer;" src="{{ asset($product->pro_image)}}" alt="{{$product->pro_name}}" />
                                </li>
                                @foreach( $proImages as $img )
                                <li class="image-room">
                                    <img style="cursor: pointer;" src="/uploads/product/album/{{ $img->pi_slug }}" alt="/uploads/product/album/{{ $img->pi_name }}" />
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                        <div class="single-product-descirption">
                            <h2>{{ $product->pro_name}}</h2>
                            <div class="single-product-condition">
                                <h3>Danh mục: <span>{{ $product->category->c_name }}</span></h3>
                                <h3 style="margin-top: 5px;">Tình trạng: <span>
                                    @if( $product->pro_number) Còn hàng
                                    @else Hết hàng
                                    @endif
                                </span></h3>
                            </div>
                            <div class="single-product-desc">
                                <p>{!! $product->pro_desc !!}</p>
                            </div>
                            <div class="single-product-price" style="display: flex;">
                                @if( $product->pro_price )
                                    @if( $product->pro_sale)
                                        <h2  style="color: blue;margin-right: 10px;">{{ number_format(($product->pro_price*(100-$product->pro_sale))/100) }}đ</h2>
                                        <h2><del>{{ number_format($product->pro_price) }}đ</del></h2>
                                    @else
                                        <h2 style="color: blue">{{ number_format($product->pro_price) }}đ</h2>
                                    @endif
                                @else
                                    <h2>Liên hệ</h2>
                                @endif
                            </div>
                            <div class="single-product-add-cart" style="padding: 5px;background: #80808024;">
                                <p><i>Qúy khách lưu ý:<br> Cửa hàng chỉ ship với những đơn trên 300,000đ.<br> Cửa hàng ưu tiên xữ lý các đơn đặt hàng Online, free ship trong ngày nội thành HCM & HN!</i></p>
                                <a style="margin-top: 15px;" class="btn btn-sm btn-primary" title="" href="{{ route('get.ShoppingCart', $product->id) }}">Thêm vào giỏ</a>
                                <a style="margin-top: 15px;" class="btn btn-sm btn-primary js-add-favourite" title="" href="{{ route('ajax_get.favourite', $product->id)}}">Thêm yêu thích</a><br>
                                <div style="margin-top: 5px;" class="fb-share-button" data-href="http://vanphongpham89.com/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ $meta_canonical }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                <div class="fb-like" data-href="{{ $meta_canonical }}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-PRODUCT-DESCRIPTION END -->
                <!-- SINGLE-PRODUCT INFO TAB START -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="product-more-info-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs more-info-tab">
                                <li class="active"><a href="#moreinfo" data-toggle="tab">Mô tả sản phẩm</a></li>
                                <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="moreinfo">
                                    <div class="tab-description">
                                        <p>{!! $product->pro_content !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="review">
                                    <div class="row tab-review-row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-5">
                                            <div class="tab-rating-box">
                                                <h3 class="comment-reply-title"  style="margin-bottom: 20px">CÁC ĐÁNH GIÁ:</h3>
                                                <div class="comments-list">
                                                    <div class="comments-details">
                                                        @foreach( $ratings as $rating)
                                                            <div class="comments-content-wrap" style="margin-left: 0">
                                                                <span>
                                                                <b style="color: blue;margin-right: 10px;">{{ $rating->r_name}}</b>
                                                                <span class="post-time"><i class="fa fa-calendar"></i>&nbsp&nbsp{{ $rating->created_at}}</span>
                                                                </span>
                                                                <p style="margin-top: 5px; color: green" class="item_review">{{ $rating->getType($rating->r_type)['name']}} - {{$rating->r_content}}
                                                                </p>
                                                            </div>
                                                            @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-5">
                                            <div class="write-your-review">
                                                <h3 class="comment-reply-title" style="margin-bottom: 20px">ĐÁNH GIÁ:</h3>
                                                <form id="form-review" action="{{ route('post.rating.product', $product->id) }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div style="margin-top: 5px" class="col-md-12 comment-form-comment">
                                                            <p>Lời bình: </p>
                                                            <textarea required="required" class="form-control" style="padding: 5px" name="r_content" id="message" cols="50" rows="5" placeholder="Nhập đánh giá sản phẩm"></textarea>
                                                            <p style="margin-top: 10px;">Chọn đánh giá</p>
                                                            <select name="r_type" required="required" class="form-control">
                                                                <option value="0">--Chọn một đánh giá--</option>
                                                                <option value="1">Chất lượng kém</option>
                                                                <option value="2">Chất lượng Trung bình</option>
                                                                <option value="3">Chất lượng khá</option>
                                                                <option value="4">Chất lượng tốt</option>
                                                                <option value="5">Chất lượng rất tốt</option>
                                                            </select>
                                                            <p style="margin-top: 10px;">Họ tên: </p>
                                                            <input class="form-control" type="text" required="" name="r_name" placeholder="Nhập tên" value="{{Session::get('user_name')}}"><br>
                                                            <p>Email: </p>
                                                            <input class="form-control" type="email" name="r_email" placeholder="email" value="{{Session::get('user_email')}}"><br>
                                                            <button type="submit" style="font-size: 14px;margin-top: 10px" class="btn btn-success send-reviews">Gửi đánh giá</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SINGLE-PRODUCT INFO TAB END -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="left-title-area">
                            <h2 class="left-title">Bình luận về <i>{{ $product->pro_name }}</i></h2>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="fb-comments" data-href="{{ $meta_canonical }}" data-numposts="10" data-width=""></div>
                    </div>
                </div>
                <!-- RELATED-PRODUCTS-AREA START -->
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-12">
                        <div class="left-title-area">
                            <h2 class="left-title">Sản phẩm cùng danh mục</h2>
                        </div>
                    </div>
                    <div class="related-product-area featured-products-area">
                        <div class="col-sm-12">
                            <div class=" row">
                                <!-- RELATED-CAROUSEL START -->
                                <div class="related-product">
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                    @foreach( $productSuggests as $item )
                                    <div class="item">
                                        @include('frontend.include.product_item', ['item' => $item])
                                    </div>
                                    @endforeach
                                    <!-- SINGLE-PRODUCT-ITEM END -->						
                                </div>
                                <!-- RELATED-CAROUSEL END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RELATED-PRODUCTS-AREA END -->
            </div>
            <!-- RIGHT SIDE BAR START -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"  style="background: #F4F7F3">
                <!-- SINGLE SIDE BAR START -->
                <div class="single-product-right-sidebar">
                    <h2 class="left-title" style="color: blue">Đang Sale</h2>
                    <ul>
                        <!-- SINGLE ITEM START -->
                                @if( isset($productsSale) )
                                @foreach( $productsSale as $product)
                                <li class="cat-product-list" style="padding: 0px;">
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a style="margin: 0px;" href="{{ route('get.ProductDetail', $product->pro_slug.'-'.$product->id)}}"><img class="img-lazyload" data-original="{{ asset($product->pro_image)}}" alt="product-image" style="height: 90px;" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
                                        <div class="list-view-content">
                                            <div class="single-product-item">
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <a style="font-size: 13px" href="{{ route('get.ProductDetail', $product->pro_slug.'-'.$product->id)}}">{{ $product->pro_name }} <span style="color: blue">
                                                            @if( $product->pro_sale > 0)
                                                               - Sale {{ $product->pro_sale }}%
                                                            @endif </span>
                                                        </a>
                                                    </div>
                                                    <div class="price-box">
                                                        @if( $product->pro_price)
                                                            @if( $product->pro_sale )
                                                              <span class="new-price" style="padding: 5px 3px;">{{ number_format( ((100-$product->pro_sale)/100) * $product->pro_price )}}đ</span>
                                                              <span class="new-price" style="padding: 5px 3px; color: red"><del>{{ number_format( $product->pro_price )}}đ</del></span>
                                                            @else
                                                              <span class="new-price" style="padding: 5px 3px;">{{ number_format( $product->pro_price )}}đ</span>
                                                            @endif
                                                        @else
                                                            <span>Liên hệ</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                                <!-- SINGLE ITEM END -->
                    </ul>
                </div>
            </div>
            <!-- SINGLE SIDE BAR END -->				
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@stop

@section('script')
 <script type="text/javascript">
     $(function(){

        // dùng cho hiển thị ảnh khi click vào từng ảnh nhỏ
            $('.image-room').on('click', function() {
                var imgUrl = $(this).children('img')[0].src;
                $('.single-product-image').children('img')[0].src = imgUrl;
            })
    })
 </script>

 <!-- thêm yêu thích -->
  <script type="text/javascript">
       $(function(){
            //yêu thích
            $(".js-add-favourite").click(function(event){
                event.preventDefault();
                let $this = $(this);
                let URL    = $(this).attr('href'); 
                    if (URL) {
                        $.ajax({
                            url: URL
                        }).done(function(results){
                            alert(results.messages);
                            window.location.reload(); //web tự load lại au khi nhấn cập nhật
                        });
                    }
            })
         })

   </script>
@stop