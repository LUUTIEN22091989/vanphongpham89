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
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="slider-area">
                        <div id="wrapper">
                            <div class="slider-wrapper">
                                <div id="mainSlider" class="nivoSlider">
                                    <img src="frontend/img/slider/2.jpg" alt="main slider" title="#htmlcaption"/>
                                    <img src="frontend/img/slider/1.jpg" alt="main slider" title="#htmlcaption2"/>
                                </div>
                                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                                    <div class="slider-progress"></div>
                                    <div class="slider-cap-text slider-text1">
                                        <div class="d-table-cell">
                                            <h2 class="animated bounceInDown">BEST THEMES</h2>
                                            <p class="animated bounceInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod ut laoreet dolore magna aliquam erat volutpat.</p>
                                            <a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More <i class="fa fa-caret-right"></i></a>													
                                        </div>
                                    </div>
                                </div>
                                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                                    <div class="slider-progress"></div>
                                    <div class="slider-cap-text slider-text2">
                                        <div class="d-table-cell">
                                            <h2 class="animated bounceInDown">BEST THEMES</h2>
                                            <p class="animated bounceInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod ut laoreet dolore magna aliquam erat volutpat.</p>
                                            <a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More <i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SLIDER-AREA END -->
                <!-- SLIDER-RIGHT START -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 row tow-column-product">
                    <div class="new-product-area" style="margin-top: 0px;">
                        <div class="left-title-area">
                            <h2 class="left-title" style="color: #0562fd;">Tin tức</h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <!-- NEW-PRO-CAROUSEL START -->
                                    <div class="new-pro-carousel" style="display: flex;">
                                        <!-- NEW-PRODUCT-SINGLE-ITEM START -->
                                        <div class="item">
                                            <div class="new-product">
                                                <div class="single-product-item">
                                                    <div class="product-image">
                                                        <a href="#"><img src="frontend/img/product/sale/8.jpg" alt="product-image" /></a>
                                                        <a href="#" class="new-mark-box">new</a>
                                                        <div class="overlay-content">
                                                            <ul>
                                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="customar-comments-box">
                                                            <div class="rating-box">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-empty"></i>
                                                                <i class="fa fa-star-half-empty"></i>
                                                            </div>
                                                            <div class="review-box">
                                                                <span>1 Review (s)</span>
                                                            </div>
                                                        </div>
                                                        <a href="single-product.html">Printed Dress</a>
                                                        <div class="price-box">
                                                            <span class="price">$26.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                    <!-- NEW-PRO-CAROUSEL END -->
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                <!-- SLIDER-RIGHT END -->
            </div>
            <!-- MAIN-SLIDER-AREA END -->
        </div>
        <div class="row">
            <!-- ADD-TWO-BY-ONE-COLUMN START -->
            <div class="add-two-by-one-column">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="tow-column-add zoom-img">
                        <a href="#"><img src="frontend/img/product/shope-add1.jpg" alt="shope-add" /></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="one-column-add zoom-img">
                        <a href="#"><img src="frontend/img/product/shope-add2.jpg" alt="shope-add" /></a>
                    </div>
                </div>
            </div>
            <!-- ADD-TWO-BY-ONE-COLUMN END -->
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
        <div class="row">
            <!-- BESTSELLER-PRODUCTS-AREA START -->
            <div class="bestseller-products-area">
                <div class="center-title-area">
                    <h2 class="center-title">bestseller</h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- BESTSELLER-CAROUSEL START -->
                        <div class="bestseller-carousel">
                            <!-- BESTSELLER-SINGLE-ITEM START -->
                            <div class="item">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="frontend/img/product/sale/1.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">sale!</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review (s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Blouse</a>
                                        <div class="price-box">
                                            <span class="price">$22.95</span>
                                            <span class="old-price">$27.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BESTSELLER-SINGLE-ITEM END -->
                            <!-- BESTSELLER-SINGLE-ITEM START -->
                            <div class="item">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="frontend/img/product/sale/3.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review (s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <div class="price-box">
                                            <span class="price">$16.51</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BESTSELLER-SINGLE-ITEM END -->
                            <!-- BESTSELLER-SINGLE-ITEM START -->								
                            <div class="item">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="frontend/img/product/sale/9.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">sale!</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review (s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Dress</a>
                                        <div class="price-box">
                                            <span class="price">$23.40</span>
                                            <span class="old-price">$26.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BESTSELLER-SINGLE-ITEM END -->
                            <!-- BESTSELLER-SINGLE-ITEM START -->								
                            <div class="item">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="frontend/img/product/sale/13.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review (s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Summer Dress</a>
                                        <div class="price-box">
                                            <span class="price">$30.50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BESTSELLER-SINGLE-ITEM END -->
                            <!-- BESTSELLER-SINGLE-ITEM START -->
                            <div class="item">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="frontend/img/product/sale/3.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review (s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Faded Short Sleeves T-shirt</a>
                                        <div class="price-box">
                                            <span class="price">$16.51</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BESTSELLER-SINGLE-ITEM END -->									
                            <!-- BESTSELLER-SINGLE-ITEM START -->								
                            <div class="item">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="frontend/img/product/sale/7.jpg" alt="product-image" /></a>
                                        <a href="#" class="new-mark-box">new</a>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="customar-comments-box">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                                <i class="fa fa-star-half-empty"></i>
                                            </div>
                                            <div class="review-box">
                                                <span>1 Review (s)</span>
                                            </div>
                                        </div>
                                        <a href="single-product.html">Printed Chiffon Dress</a>
                                        <div class="price-box">
                                            <span class="price">$16.40</span>
                                            <span class="old-price">$20.50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BESTSELLER-SINGLE-ITEM END -->								
                        </div>
                        <!-- BESTSELLER-CAROUSEL END -->
                    </div>
                </div>
            </div>
            <!-- BESTSELLER-PRODUCTS-AREA END -->
        </div>
        <div class="row">
            <!-- IMAGE-ADD-AREA START -->
            <div class="image-add-area">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- ONEHALF-ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img src="frontend/img/product/one-helf1.jpg" alt="shope-add" /></a>
                    </div>
                    <!-- ONEHALF-ADD END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- ONEHALF-ADD START -->
                    <div class="onehalf-add-shope zoom-img">
                        <a href="#"><img src="frontend/img/product/one-helf2.jpg" alt="shope-add" /></a>
                    </div>
                    <!-- ONEHALF-ADD END -->
                </div>
            </div>
            <!-- IMAGE-ADD-AREA END -->
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
                    <h2 class="center-title"><a href="#">latest news</a></h2>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <!-- LATEST-NEWS-CAROUSEL START -->
                        <div class="latest-news-carousel">
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/1.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Lorem Ipsum?</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/2.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Share the Love for printing</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->								
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/3.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Answers your Questions P..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->								
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/4.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Bootstrap? – History</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->								
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/5.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Share the Love for..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->								
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/6.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Bootstrap? – The History a..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->	
                            <!-- LATEST-NEWS-SINGLE-POST START -->								
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/3.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">Answers your Questions P..</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST-NEWS-SINGLE-POST END -->
                            <!-- LATEST-NEWS-SINGLE-POST START -->								
                            <div class="item">
                                <div class="latest-news-post">
                                    <div class="single-latest-post">
                                        <a href="#"><img src="frontend/img/latest-news/4.jpg" alt="latest-post" /></a>
                                        <h2><a href="#">What is Bootstrap? – History</a></h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                        <div class="latest-post-info">
                                            <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                        </div>
                                        <div class="read-more">
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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