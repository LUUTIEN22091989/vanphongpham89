@extends('layouts.layout_admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update Danh mục
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="c_name">Tên danh mục</label>
                                        <input type="text" name="c_name" class="form-control" id="c_name" placeholder="Tên danh mục" value="{{ $category->c_name }}">
                                        @if($errors->has('c_name'))
                                            <span style="color: red;font-size: 15px;" class="error-text text-danger">
                                                {{$errors->first('c_name')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Danh mục cha</label>
                                        <select class="form-control" name="c_parent_id">
                                            <option value="0">-- chọn --</option>
                                            @foreach( $_categories as $cat)
                                                <option {{ ($category->c_parent_id == $cat->id ? 'selected':'') }} value="{{ $cat->id }}">{{ $cat->c_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_desc">Meta Desc</label>
                                        <textarea rows="8" id="ckeditor1" type="text" name="meta_desc" class="form-control">{!! $category->meta_desc !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="mete_keywords">Meta Keywords</label>
                                        <textarea rows="8" id="ckeditor2" type="text" name="meta_keywords" class="form-control">{!! $category->meta_keywords !!}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <br>
                                        <img style="margin: 10px;" src="{{ asset($category->c_avatar) }}" width="100" height="100">
                                        <input type="file" name="c_avatar" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-info">Cập nhật</button>
                                    <a href="{{ Route('admin.category.index') }}" class="btn btn-sm btn-primary">Quay lại</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@stop