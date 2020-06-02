@extends('layouts.layout_admin')
@section('content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê mã giảm giá
    </div>
    <div class="table-responsive">      
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên mã giảm giá</th>
            <th>Mã giảm giá</th>
            <th>Số lượng giảm giá</th>
            <th>Điều kiện giảm giá</th>
            <th>Số giảm</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cuppons as $key => $cou)
          <tr>
          
            <td>{{ $cou->cp_name }}</td>
            <td>{{ $cou->cp_code }}</td>
            <td>{{ $cou->cp_stock }}</td>
            <td><span class="text-ellipsis">
              <?php
               if($cou->cp_condition==0){
                ?>
                Giảm theo %
                <?php
                 }else{
                ?>  
                Giảm theo tiền
                <?php
               }
              ?>
            </span>
          </td>
             <td><span class="text-ellipsis">
              <?php
               if($cou->cp_condition==0){
                ?>
                Giảm {{$cou->cp_number}} %
                <?php
                 }else{
                ?>  
                Giảm {{$cou->cp_number}} k
                <?php
               }
              ?>
            </span></td>
           
            <td>
              <a href="{{ route('admin.cuppon.delete', $cou->id)}}" class="active styling-edit js-delete-confirm" ui-toggle-class="">Xóa</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          {{ $cuppons->links() }}
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection