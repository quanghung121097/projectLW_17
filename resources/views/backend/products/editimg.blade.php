@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update sản phẩm</h1>
            <a style="display: inline-block; margin-top: 30px;" href="{{route('backend.product.index')}}" class="btn btn-primary">Danh sách sản phẩm</a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Update sản phẩm</li>
            </ol>
        </div><!-- /.col -->
    </div>
    @endsection
    @section('content')
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update ảnh sản phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    @foreach($images as $img)
                    <div>
                        <img src="/{{$img->path}}" width="100px" height="100px">
                        <a style="display: inline-block; width: 40px; height: 40px; " href="{{route('backend.product.deleteimg',[$img->id,$img->product_id])}}" class="btn btn-danger" id="deleteproduct" ><i class="fas fa-times"></i></i></a>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        @endsection
        @section('js')
        <script>
            $("#deleteproduct").click(function(){
                return confirm("Bạn chắc chắn xóa không ?");
            });
        </script>
        @endsection