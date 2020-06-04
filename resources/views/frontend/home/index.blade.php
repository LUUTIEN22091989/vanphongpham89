@extends('layouts.layout_frontend')

@section('css')
  <style type="text/css">
      .new-pro-carousel .owl-wrapper-outer .owl-item {
             width: 100% !important; 
        }
  </style>
@stop
@section('content')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <!-- MAIN-SLIDER-AREA START -->
            <div class="main-slider-area">
                <!-- SLIDER-AREA START -->
                <div class="col-xs-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        @php
                              $i = 0;
                            @endphp
                            @foreach( $slides as $slide )
                                @php
                                  $i++;
                                @endphp
                                <div class="item {{ $i==1 ? 'active' : '' }}">
                                        <a href="{{ $slide->sd_link}}"><img style="width:100%;height: 400px;" src="{{ asset($slide->sd_image) }}" class="girl img-fluid" alt="{{ $slide->sd_name }}" /></a>
                                </div>
                            @endforeach
                      </div>
                    </div>
                </div>
                <!-- SLIDER-AREA END -->
            </div>
            <!-- MAIN-SLIDER-AREA END -->
        </div>
    </div>
</section>
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3" style="padding-top: 50px;">
                <div class="single-product-right-sidebar" style="background: #F4F7F3">
                    <h2 class="left-title" style="color: blue">Đang Sale</h2>
                    <ul>
                        <!-- SINGLE ITEM START -->
                                @if( isset($productsSale) )
                                @foreach( $productsSale as $product)
                                <li class="cat-product-list" style="padding: 0px;">
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a style="margin: 0px;" href="{{ route('get.ProductDetail', $product->pro_slug.'-'.$product->id)}}"><img class="lazyload" src="{{ asset($product->pro_image)}}" alt="product-image" style="height: 90px;" /></a>
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
            <div class="col-xs-12 col-sm-9">
                <div class="row">
                    <!-- FEATURED-PRODUCTS-AREA START -->
                    <div class="featured-products-area">
                        <div class="center-title-area">
                            <h2 class="center-title" style="color: #0562fd;font-weight: bold;font-size: 25px;">Sản phẩm mới nhất</h2>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <!-- FEARTURED-CAROUSEL START -->
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                        @foreach( $productsNew as $item )
                                        <div class="item col-xs-6 col-sm-3" style="margin-bottom: 10px;height: 290px">
                                            @include('frontend.include.product_item', ['item' => $item])
                                        </div>
                                        @endforeach
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- FEARTURED-CAROUSEL END -->
                            </div>
                        </div>
                    </div>
                    <!-- FEATURED-PRODUCTS-AREA END -->
                </div>
                <div class="row">
                    <!-- FEATURED-PRODUCTS-AREA START -->
                    <div class="featured-products-area">
                        <div class="center-title-area">
                            <h2 class="center-title" style="color: #0562fd;font-weight: bold;font-size: 25px;">Sản phẩm được mua nhiều</h2>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <!-- FEARTURED-CAROUSEL START -->
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                        @foreach( $productsPay as $item )
                                        <div class="item col-xs-6 col-sm-3" style="margin-bottom: 10px;height: 290px">
                                            @include('frontend.include.product_item', ['item' => $item])
                                        </div>
                                        @endforeach
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <div>
                                            {{ $productsPay->links() }}
                                        </div>
                                <!-- FEARTURED-CAROUSEL END -->
                            </div>
                        </div>
                    </div>
                    <!-- FEATURED-PRODUCTS-AREA END -->
                </div>
                @foreach ($productsByCategory as $item)
                <div class="row">
                    <!-- FEATURED-PRODUCTS-AREA START -->
                    <div class="featured-products-area">
                        <div class="center-title-area">
                            <h2 class="center-title" style="color: #0562fd;font-weight: bold;font-size: 25px;">{{ $item['category']->c_name }}</h2>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <!-- FEARTURED-CAROUSEL START -->
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                        @foreach( $item['products'] as $item )
                                        <div class="item col-xs-6 col-sm-3" style="margin-bottom: 10px;height: 290px">
                                            @include('frontend.include.product_item', ['item' => $item])
                                        </div>
                                        @endforeach
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                <!-- FEARTURED-CAROUSEL END -->
                            </div>
                        </div>
                    </div>
                    <!-- FEATURED-PRODUCTS-AREA END -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
<!-- LATEST-NEWS-AREA START -->
<section class="latest-news-area">
    <div class="container">
        <div class="row">
            <div class="latest-news-row">
                <div class="center-title-area">
                    <h2 class="center-title" style="color: blue;font-weight: bold;font-size: 25px;" href="#">Tin tức</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- LATEST-NEWS-CAROUSEL START -->
                        <div class="latest-news-carousel">
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            @foreach( $articles as $item )
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="{{ route('get.article.detail', $item->a_slug.'-'.$item->id)}}"><img style="width: 100%;height: 150px;" src="{{ asset( $item->a_avatar) }}" alt="latest-post" /></a>
                                        <h2><a style="font-size: 13px;" href="{{ route('get.article.detail', $item->a_slug.'-'.$item->id)}}">{{ $item->a_name }}</a></h2>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>{!! $item->created_at !!}</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="{{ route('get.article.detail', $item->a_slug.'-'.$item->id)}}">Chi tiết <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- LATEST-NEWS-SINGLE-POST END -->									
                        </div>
                        <!-- LATEST-NEWS-CAROUSEL START -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LATEST-NEWS-AREA END -->
@stop