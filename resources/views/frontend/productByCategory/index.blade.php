@extends('layouts.layout_frontend')
@section('content')
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb col-xs-12 col-sm-3 col-md-3" style="background: #0562fd;padding: 6px;">
                        <span style="color: white">{{ $category->c_name }} </span>
                    
                </div>
                <!-- BSTORE-BREADCRUMB END -->
                <div class="col-xs-12 col-sm-9 col-md-9" style="margin-top: 19px">
                    <div class="row">
                        <form class="col-sm-12" method="" action="">
                                <div class="col-sm-4 search-price col-sm-offset-1">
                                    <select name="gia" class="form-control">
                                        <option value="0">--Chọn mức giá--</option>
                                        <option value="9" {{ Request::get('gia') ==9 ? "selected='selected'" : ""}}>Dưới 20,000đ</option>
                                         @for($i =1; $i <= 7; $i++)
                                         <option value="{{ $i }}" {{ Request::get('gia') == $i ? "selected='selected'" : ""}}>Từ  {{ number_format($i * 20000)}}đ - {{ number_format($i * 20000 + 20000)}} đ</option>   
                                          @endfor
                                         <option value="8" {{ Request::get('gia') ==8 ? "selected='selected'" : ""}}>Trên 160,000 đ</option>             
                                    </select>
                                </div>
                                <div class="col-sm-4 search-price">
                                    <select name="sap_xep" class="form-control">
                                        <option value="0">--Sắp xếp--</option>
                                        <option value="1" {{ Request::get('sap_xep') ==1 ? "selected='selected'" : ""}}>Đang khuyến mãi</option>   
                                        <option value="2" {{ Request::get('sap_xep') ==2 ? "selected='selected'" : ""}}>Không khuyến mãi</option>         
                                        <option value="3" {{ Request::get('sap_xep') ==3 ? "selected='selected'" : ""}}>Gía giảm dần</option>
                                        <option value="4" {{ Request::get('sap_xep') ==4 ? "selected='selected'" : ""}}>Gía tăng dần</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <button style="margin-top: 0px" type="submit" class="btn btn-primary">Tìm sản phẩm</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-xs-12">
                <!-- ALL GATEGORY-PRODUCT START -->
                <div class="all-gategory-product">
                    <div class="row">
                        <div class="center-title-area">
                            <h2 class="center-title" style="color: #0562fd;">{{ $category->c_name }} - Tổng {{ $products->total() }} Sản phẩm </h2>
                        </div>
                        <ul class="gategory-product">
                            <!-- SINGLE ITEM START -->
                            @foreach( $products as $item )
                            <li class="gategory-product-list col-lg-2 col-md-3 col-sm-6 col-xs-12" style="margin-bottom: 10px;height: 290px">
                                   @include('frontend.include.product_item', ['item' => $item])
                            </li>
                            @endforeach
                            <!-- SINGLE ITEM END -->								
                        </ul>
                        <div>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
                <!-- ALL GATEGORY-PRODUCT END -->
            </div>
        </div>
    </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@stop