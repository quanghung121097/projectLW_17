@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sách đơn hàng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">đơn hàng</a></li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
@endsection
@section('content')
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">đơn hàng mới nhập</h3>
                    <br>
                    <i class="alert " style="color: red;">
                        @if(session()->has('success'))
                        <span>{{session()->get('success')}}</span>
                        @endif
                        @if(session()->has('error'))
                        <span>{{session()->get('error')}}</span>
                        @endif
                        @if(session()->has('update_success'))
                        <span>{{session()->get('update_success')}}</span>
                        @endif
                        @if(session()->has('update_error'))
                        <span>{{session()->get('update_error')}}</span>
                        @endif
                    </i>
                    
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã đơn hàng</th>
                                <th>Doanh thu</th>
                                <th>Trạng thái</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($oders as $oder)
                            <tr>
                                <td>{{$oder->id}}</td>
                                <td><a href="{{route('backend.oder.show',$oder->id)}}">{{$oder->code}}</a></td>
                                <td>{{number_format($oder->total)}} Vnđ
                                </td>
                                <td>
                                    @php
                                    if ($oder->status==0) {
                                        echo 'Chờ giao hàng<br>';
                                    } else if($oder->status==1) {
                                        echo 'Đang giao hàng';
                                    }else {
                                        echo 'Đã giao hàng';
                                    }
                                    @endphp
                                </td>
                                <td>{{$oder->customer_name}}</td>
                                <td>{{$oder->customer_phone}}</td>
                                
                                <td>
                                    @if($oder->status==0)
                                    <a style="display: inline-block;" href="{{route('backend.oder.udstatus',$oder->id)}}" class="btn btn-danger"><i class="fas fa-truck"></i></a>
                                    @endif
                                    @if($oder->status==1)
                                    <a style="display: inline-block;" href="{{route('backend.oder.udstatus',$oder->id)}}" class="btn btn-success"><i class="fas fa-clipboard-check"></i></i></a>
                                    @endif
                                    
                                </td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                    {!! $oders->links() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
</div>
@endsection
@section('js')
<script>
    CKEDITOR.replace( 'content' );
</script>

{{-- <script>
    $("#deleteproduct").click(function(){
        return confirm("Bạn chắc chắn xóa không ?");
    });
</script> --}}
@endsection