@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update sản phẩm</h1>
            <a style="display: inline-block; margin-top: 30px;" href="{{route('backend.product.index')}}" class="btn btn-warning">Quay lại</a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Update sản phẩm</li>
            </ol>
        </div><!-- /.col -->
    </div>
</div>
@endsection
@section('content')
<center>
    <div class="alert alert-danger">Không có quyền tạo xin liên hệ Admin</div>
</center>
@endsection