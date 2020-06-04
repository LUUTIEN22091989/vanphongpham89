@extends('layouts.layout_frontend')
@section('content')
<section class="latest-news-area" style="overflow: inherit !important;">
    <div class="container">
    	<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{ route('frontend.home') }}">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
							<span style="color: blue"> &nbsp{{ $static->ps_name }} </span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
        <div class="row">
            <div class="latest-news-row col-xs-12">
                <div class="center-title-area mt-1">
                    <h2 class="center-title" style="color: blue;">{{ $static->ps_name }}</h2>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="about-page-cntent">
                                <p>{!! $static->ps_content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop