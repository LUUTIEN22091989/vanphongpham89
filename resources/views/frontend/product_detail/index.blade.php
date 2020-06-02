@extends('layouts.layout_frontend')
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
                    <a style="color: white" href="shop-gird.html"> {{ $product->category->c_name }} </a>
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
                                        @endif                                    </div>
                                </div>
                                <div class="tab-pane" id="thumbnail_2">
                                    <div class="single-product-image">
                                        <img src="/frontend/img/product/sale/3.jpg" alt="single-product-image" />
                                        <a class="new-mark-box" href="#">new</a>
                                        <a class="fancybox" href="img/product/sale/3.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="thumbnail_3">
                                    <div class="single-product-image">
                                        <img src="/frontend/img/product/sale/9.jpg" alt="single-product-image" />
                                        <a class="new-mark-box" href="#">new</a>
                                        <a class="fancybox" href="img/product/sale/9.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="thumbnail_4">
                                    <div class="single-product-image">
                                        <img src="/frontend/img/product/sale/13.jpg" alt="single-product-image" />
                                        <a class="new-mark-box" href="#">new</a>
                                        <a class="fancybox" href="img/product/sale/13.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="thumbnail_5">
                                    <div class="single-product-image">
                                        <img src="/frontend/img/product/sale/7.jpg" alt="single-product-image" />
                                        <a class="new-mark-box" href="#">new</a>
                                        <a class="fancybox" href="img/product/sale/7.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="thumbnail_6">
                                    <div class="single-product-image">
                                        <img src="/frontend/img/product/sale/12.jpg" alt="single-product-image" />
                                        <a class="new-mark-box" href="#">new</a>
                                        <a class="fancybox" href="img/product/sale/12.jpg" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="select-product">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs select-product-tab bxslider">
                                <li class="active">
                                    <a href="#thumbnail_1" data-toggle="tab"><img src="{{ asset($product->pro_image)}}" alt="{{$product->pro_name}}" /></a>
                                </li>
                                <li>
                                    <a href="#thumbnail_2" data-toggle="tab"><img src="/frontend/img/product/sidebar_product/2.jpg" alt="pro-thumbnail" /></a>
                                </li>
                                <li>
                                    <a href="#thumbnail_3" data-toggle="tab"><img src="/frontend/img/product/sidebar_product/3.jpg" alt="pro-thumbnail" /></a>
                                </li>
                                <li>
                                    <a href="#thumbnail_4" data-toggle="tab"><img src="/frontend/img/product/sidebar_product/4.jpg" alt="pro-thumbnail" /></a>
                                </li>
                                <li>
                                    <a href="#thumbnail_5" data-toggle="tab"><img src="/frontend/img/product/sidebar_product/5.jpg" alt="pro-thumbnail" /></a>
                                </li>
                                <li>
                                    <a href="#thumbnail_6" data-toggle="tab"><img src="/frontend/img/product/sidebar_product/6.jpg" alt="pro-thumbnail" /></a>
                                </li>
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
                                <a style="margin-top: 15px;" class="btn btn-lg btn-primary" title="" href="{{ route('get.ShoppingCart', $product->id) }}">Thêm vào giỏ</a><br>
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <!-- SINGLE SIDE BAR START -->
                <div class="single-product-right-sidebar">
                    <h2 class="left-title">Viewed products</h2>
                    <ul>
                        <li>
                            <a href="#"><img src="/frontend/img/product/sidebar_product/2.jpg" alt="" /></a>
                            <div class="r-sidebar-pro-content">
                                <h5><a href="#">Faded Short ...</a></h5>
                                <p>Faded short sleeves t-shirt with high...</p>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img src="/frontend/img/product/sidebar_product/4.jpg" alt="" /></a>
                            <div class="r-sidebar-pro-content">
                                <h5><a href="#">Printed Chif ..</a></h5>
                                <p>Printed chiffon knee length dress...</p>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img src="/frontend/img/product/sidebar_product/6.jpg" alt="" /></a>
                            <div class="r-sidebar-pro-content">
                                <h5><a href="#">Printed Sum ...</a></h5>
                                <p>Long printed dress with thin...</p>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img src="/frontend/img/product/sidebar_product/1.jpg" alt="" /></a>
                            <div class="r-sidebar-pro-content">
                                <h5><a href="#">Printed Dress </a></h5>
                                <p>100% cotton double printed dress....</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- SINGLE SIDE BAR END -->
                <!-- SINGLE SIDE BAR START -->
                <div class="single-product-right-sidebar clearfix">
                    <h2 class="left-title">Tags </h2>
                    <div class="category-tag">
                        <a href="#">fashion</a>
                        <a href="#">handbags</a>
                        <a href="#">women</a>
                        <a href="#">men</a>
                        <a href="#">kids</a>
                        <a href="#">New</a>
                        <a href="#">Accessories</a>
                        <a href="#">clothing</a>
                        <a href="#">New</a>
                    </div>
                </div>
                <!-- SINGLE SIDE BAR END -->
                <!-- SINGLE SIDE BAR START -->						
                <div class="single-product-right-sidebar">
                    <div class="slider-right zoom-img">
                        <a href="#"><img class="img-responsive" src="/frontend/img/product/cms11.jpg" alt="sidebar left" /></a>
                    </div>
                </div>
            </div>
            <!-- SINGLE SIDE BAR END -->				
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@stop