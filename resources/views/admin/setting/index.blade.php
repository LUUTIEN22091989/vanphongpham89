@extends('layouts.layout_admin')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Stt</th>
            <th>Logo</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Hotline</th>
            <th>Ẩn/Hiện</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $settings as $key => $item )
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>
              <img src="{{ asset($item->logo) }}" width="70" height="70">
            </td>
            <td>
              <ul>
                <li>{{ $item->address_1}}</li>
                <li>{{ $item->address_2}}</li>
                <li>{{ $item->address_3}}</li>
              </ul>
            </td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->hotline }}</td>
            <td>
              @if( $item->status == 1 )
                 <a href="{{ route('admin.setting.status', $item->id)}}" class="btn btn-xs btn-primary"><span class="text-ellipsis">Hiện</span></a>
              @else
                <a href="{{ route('admin.setting.status', $item->id)}}" class="btn btn-xs btn-danger"><span class="text-ellipsis">Ẩn</span></a>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.setting.update', $item->id)}}" class="btn btn-xs btn-primary">Sửa</a>
              <a href="{{ route('admin.setting.delete', $item->id)}}" class="btn btn-xs btn-danger js-delete-confirm">Xóa</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          {{ $settings->links() }}
        </div>
      </div>
    </footer>
  </div>
</div>
@stop