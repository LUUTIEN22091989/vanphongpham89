@extends('layouts.layout_admin')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê Liên hệ
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Tiêu đề</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Nội dung</th>
                            <th>Reply</th>
                            <th>Thời gian nhận</th>
                            <th>Action</th>
                        </tr>
                        @if( $contacts )
                        @foreach( $contacts as $contact )
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->c_title }}</td>
                            <td>{{ $contact->c_phone }}</td>
                            <td>{{ $contact->c_email }}</td>
                            <td>{{ $contact->c_content }}</td>
                            <td>
                                @if( $contact->c_reply == 1)
                                   <a href="{{ route('admin.contact.active', $contact->id) }}" class="label label-info">Đã trả lời</a>
                                @else
                                   <a href="{{ route('admin.contact.active', $contact->id) }}" class="label label-default" >Chưa trả lời</a>
                                @endif
                            </td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.contact.delete', $contact->id )}}" class="btn btn-xs btn-danger js-delete-confirm"><i class="fa fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            {{ $contacts->links() }}
        </div>
    </div>
    </section>
<!-- /.content -->
@endsection