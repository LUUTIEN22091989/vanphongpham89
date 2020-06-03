@extends('layouts.layout_frontend')
@section('content')
<section class="latest-news-area" style="overflow: inherit !important;">
    <div class="container">
    	<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{ route('frontend.home')}}">Trang chủ<span><i class="fa fa-caret-right"></i></span></a>
                            <span>&nbspTIN TỨC</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
        <div class="row">
            <div class="latest-news-row col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="center-title-area">
                    <h2 class="center-title"><a style="color: blue" href="#">tất cả tin tức</a></h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-gategory-product">
                            <div class="row">
                                <ul class="gategory-product">
                                    <!-- SINGLE ITEM START -->
                                    @foreach( $articles as $article)
                                    <li class="cat-product-list">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="{{ route('get.article.detail', $article->a_slug.'-'.$article->id)}}"><img class="lazyload" style="width: 100%; height: 140px" data-original="" src="{{ asset( $article->a_avatar )}}" alt="product-image" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="list-view-content">
                                                <div class="single-product-item">
                                                    <div class="">
                                                        <div class="customar-comments-box">
                                                            <a href="{{ route('get.article.detail', $article->a_slug.'-'.$article->id)}}">{{ $article->a_name }}</a>
                                                        </div>
                                                        <div class="">
                                                            <p>{!! $article->a_description !!}</p>
                                                        </div>
                                                        <div>
                                                            <p><i class="fa fa-calendar"></i> {!! $article->created_at !!}</p>
                                                        </div>
                                                    </div>                                              
                                                </div>                                                      
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <!-- SINGLE ITEM END -->                                  
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="">
                    {{ $articles->links() }}
                </div>
            </div>
            <div class="latest-news-row col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #F4F7F3">
                    <div class="center-title-area">
                        <h2 class="center-title"><a style="color: blue;" href="#">sản phẩm nổi bật</a></h2>
                    </div>
                    <div class="row">
                            <ul class="gategory-product">
                                <!-- SINGLE ITEM START -->
                                @if( isset($productsHot) )
                                @foreach( $productsHot as $product)
                                <li class="cat-product-list">
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="{{ route('get.ProductDetail', $product->pro_slug.'-'.$product->id)}}"><img src="{{ asset($product->pro_image)}}" alt="product-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
                                        <div class="list-view-content">
                                            <div class="single-product-item">
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <a style="font-size: 13px" href="{{ route('get.ProductDetail', $product->pro_slug.'-'.$product->id)}}">{{ $product->pro_name }}  <span style="color: blue">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #F4F7F3; margin-top: 20px">
                    <div class="center-title-area mt-1">
                        <h2 class="center-title"><a style="color: blue;" href="{{ route('get.news.list') }}">tin tức nổi bật</a></h2>
                    </div>
                    <div class="row">
                            <ul class="gategory-product">
                                <!-- SINGLE ITEM START -->
                                @if( isset($articlesHot) )
                                @foreach( $articlesHot as $article)
                                <li class="cat-product-list">
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="{{ route('get.article.detail', $article->a_slug.'-'.$article->id)}}"><img style="width: 100%; height: 75px;" src="{{ asset($article->a_avatar)}}" alt="product-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
                                        <div class="list-view-content">
                                            <div class="single-product-item">
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <a style="font-size: 13px" href="{{ route('get.article.detail', $article->a_slug.'-'.$article->id)}}">{{ $article->a_name }}</a>
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
            </div>
        </div>
    </div>
</section>
@stop