@extends('layouts.layout_admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update thương hiệu
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Logo</label>
                                        <input required="" type="file" name="logo" class="form-control" id="exampleInputEmail1" value="{{ $setting->logo}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ</label>
                                        <input type="text" name="address_2" class="form-control" id="exampleInputEmail1" value="{{ $setting->address_1}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ 2</label>
                                        <input type="text" name="address_2" class="form-control" id="exampleInputEmail1" value="{{ $setting->address_2}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ 3</label>
                                        <input type="text" name="address_3" class="form-control" id="exampleInputEmail1" value="{{ $setting->address_3}}">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Hotline</label>
                                        <input required="" type="number" name="hotline" class="form-control" id="exampleInputEmail1" value="{{ $setting->hotline}}">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input required="" type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $setting->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mô tả ngắn</label>
                                        <textarea id="ckeditor1" style="resize: none"  rows="8" class="form-control" name="desc" id="ckeditor1">{{ $setting->desc }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-info">Cập nhật</button>
                                    <a href="{{ Route('admin.setting.index') }}" class="btn btn-sm btn-primary">Quay lại</a>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@stop