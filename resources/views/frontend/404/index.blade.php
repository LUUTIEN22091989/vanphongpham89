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
                    <span style="color: white"> &nbspTìm kiếm </span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row" style="margin-top: 20px;margin-bottom: 30px;">
            <div class="col-xs-12">
                <!-- ALL GATEGORY-PRODUCT START -->
                <div class="all-gategory-product">
                    <div class="row">
                        <div class="center-title-area">
                            <h2 class="center-title" style="color: #0562fd;">Sản phẩm tìm kiếm </h2>
                        </div>
                        <div style="padding: 20px;">
                            <h2 style="color: blue;">Không có dữ liệu</h2>
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