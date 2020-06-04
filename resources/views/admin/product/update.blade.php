@extends('layouts.layout_admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm sản phẩm
                        </header>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền ít nhất 10 ký tự" name="pro_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value="{{ $product->pro_name }}">
                                    @if($errors->has('pro_name'))
                                     <span class="error-text text-danger">
                                            {{$errors->first('pro_name')}}
                                     </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" name="pro_price" class="form-control" id="" placeholder="Tên danh mục" value="{{ $product->pro_price }}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label><br>
                                    <img style="margin: 10px;" src="{{ asset($product->pro_image) }}" width="100" height="100">
                                    <input type="file" name="pro_image" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none"  rows="8" class="form-control" name="pro_desc" id="ckeditor1" placeholder="Mô tả sản phẩm">{{ $product->pro_desc }}</textarea>
                                    @if($errors->has('pro_desc'))
                                     <span class="error-text text-danger">
                                            {{$errors->first('pro_desc')}}
                                     </span>
                                    @endif
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="pro_content"  id="ckeditor2" placeholder="Nội dung sản phẩm">{{ $product->pro_content }}</textarea>
                                    @if($errors->has('pro_content'))
                                     <span class="error-text text-danger">
                                            {{$errors->first('pro_content')}}
                                     </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                        <label for="meta_desc">Meta Desc</label>
                                        <textarea rows="8" id="ckeditor1" type="text" name="meta_desc" class="form-control">{!! $product->meta_desc !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="mete_keywords">Meta Keywords</label>
                                        <textarea rows="8" id="ckeditor2" type="text" name="meta_keywords" class="form-control">{!! $product->meta_keywords !!}</textarea>
                                    </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="pro_category_id" class="form-control input-sm m-bot15">
                                            <option value="">-Chọn--</option>
                                            @foreach( $categories as $item )
                                            <option value="{{ $item->id }}" {{ $product->pro_category_id == $item->id ? 'selected' : '' }}>{{ $item->c_name }}</option>
                                            @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                      <h3 class="box-title mb-1">Album ảnh</h3>
                                      @if( isset($images) )
                                      <div class="row" style="margin-bottom: 5px">
                                        @foreach( $images as $image)
                                         <div class="col-sm-2">
                                            <img src="/uploads/product/album/{{ $image->pi_slug }}" style="width: 90px;height: 100px">
                                            <a href="{{ route('admin.product.delete_image', $image->id)}}" class="btn btn-xs btn-success">Xóa khỏi album</a>
                                         </div>
                                      @endforeach
                                      </div>
                                       @endif
                                      <div class="form-group">
                                        <div class="file-loading">
                                            <input id="images" type="file" name="file[]" multiple class="file" data-overwrite-initial="false" data-min-file-count="0">
                                        </div>
                                      </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="pro_sale">% Sale</label>
                                            <input min="0" value="{{ $product->pro_sale }}" type="number" name="pro_sale" class="form-control" id="pro_sale">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="pro_number">Số lượng</label>
                                            <input value="{{ $product->pro_number }}" type="number" name="pro_number" class="form-control" id="pro_number">
                                        </div>
                                </div>

                               
                                <button type="submit" class="btn btn-sm btn-info">Cập nhật</button>
                                <a href="{{ Route('admin.product.index') }}" class="btn btn-sm btn-primary">Quay lại</a>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
@section('script')
<!-- link album anh -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<!-- link album anh -->
@stop