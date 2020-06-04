@extends('layouts.layout_admin')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Tên bài viết</th>
                            <th>Status</th>
                            <th>Sắp xếp</th>
                            <th>Action</th>
                        </tr>
                        @if(isset($pageStatics))
                         @foreach( $pageStatics as $static)
                           <tr>
                            <td>{{ $static->id }}</td>
                            <td>{{ $static->ps_name}}</td>
                            <td>
                                @if( $static->ps_active == 1)
                                   <a href="{{ route('admin.static.active', $static->id) }}" class="label label-info">Hiển thị</a>
                                @else
                                   <a href="{{ route('admin.static.active', $static->id) }}" class="label label-default" >Không hiển thị</a>
                                @endif
                            </td>
                            <td>{{ $static->ps_sort}}</td>
                            <td>
                                <a href="{{ route('admin.static.update', $static->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Sửa</a>
                                <a href="{{ route('admin.static.delete', $static->id)}}" class="btn btn-xs btn-danger js-delete-confirm"><i class="fa fa-trash"></i> Xóa</a>
                            </td>
                            </tr>
                         @endforeach
                        @endif
                    </tbody>
                </table>
    </div>
            <div class="box-footer">
            {{ $pageStatics->links() }}
            </div>
        </div>
    </div>
    </section>
<!-- /.content -->
@endsection