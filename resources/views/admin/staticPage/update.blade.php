@extends('layouts.layout_admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Sửa bài viết
                        </header>
                        <div class="panel-body">

                            <div class="position-center">
                             @include('admin.staticPage.form')
                             </div>
                         </div>
                    </section>

               </div>
        </div>
@endsection