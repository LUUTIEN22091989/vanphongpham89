@extends('layouts.layout_admin')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê Slide
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Target</th>
                            <th>Active</th>
                            <th>Sort</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( isset($slides) )
                         @foreach( $slides as $slide)
                           <tr>
                            <td>{{ $slide->id }}</td>
                            <td>{{ $slide->sd_title }}</td>
                            <td>
                                <img src="{{ asset($slide->sd_image) }}" style="width: 80px">
                            </td>
                            <td>{{ $slide->getType($slide->sd_target)['name'] }}</td> <!-- xem bên modles\slide.php -->
                            <td>
                                @if( $slide->sd_active == 1)
                                   <a href="{{ route('admin.slide.active', $slide->id) }}" class="label label-info">Hiển thị</a>
                                @else
                                   <a href="{{ route('admin.slide.active', $slide->id) }}" class="label label-default" >Ẩn</a>
                                @endif
                            </td>
                            <td>{{ $slide->sd_sort}}</td>
                            <td>{{ $slide->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.slide.update', $slide->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Sửa</a>
                                <a href="{{ route('admin.slide.delete', $slide->id)}}" class="btn btn-xs btn-danger js-delete-confirm"><i class="fa fa-trash"></i> Xóa</a>
                            </td>
                            </tr>
                         @endforeach
                        @endif
                    </tbody>
                </table>
     </div>
        </div>
    </div>
<!-- /.content -->
@endsection