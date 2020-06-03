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
        <div class="row">
            <!-- FEATURED-PRODUCTS-AREA START -->
            <div class="featured-products-area">
                <div class="center-title-area">
                    <h2 class="center-title" style="color: #0562fd;">Sản phẩm mới nhất</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- FEARTURED-CAROUSEL START -->
                            <!-- SINGLE-PRODUCT-ITEM START -->
                                @foreach( $productsNew as $item )
                                <div class="item col-xs-6 col-sm-2" style="margin-bottom: 10px;height: 290px">
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
                    <h2 class="center-title" style="color: #0562fd;">Sản phẩm được mua nhiều</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- FEARTURED-CAROUSEL START -->
                            <!-- SINGLE-PRODUCT-ITEM START -->
                                @foreach( $productsPay as $item )
                                <div class="item col-xs-6 col-sm-2" style="margin-bottom: 10px;height: 290px">
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
        @foreach ($productsByCategory as $item)
        <div class="row">
            <!-- FEATURED-PRODUCTS-AREA START -->
            <div class="featured-products-area">
                <div class="center-title-area">
                    <h2 class="center-title" style="color: #0562fd;">{{ $item['category']->c_name }}</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- FEARTURED-CAROUSEL START -->
                            <!-- SINGLE-PRODUCT-ITEM START -->
                                @foreach( $item['products'] as $item )
                                <div class="item col-xs-6 col-sm-2" style="margin-bottom: 10px;height: 290px">
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
</section>
<!-- MAIN-CONTENT-SECTION END -->
<!-- LATEST-NEWS-AREA START -->
<section class="latest-news-area">
    <div class="container">
        <div class="row">
            <div class="latest-news-row">
                <div class="center-title-area">
                    <h2 class="center-title"><a style="color: blue;" href="#">Tin tức</a></h2>
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