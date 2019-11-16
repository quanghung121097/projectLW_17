@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Thêm sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
                <li class="breadcrumb-item active">Chi tiết</li>
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
                        <a href="{{route('backend.oder.show',$oder_id)}}" class="btn btn-danger">Hủy</a>
                    </div>
                    <!-- /.card-header -->
                    
                    <form role="form" method="post" action="{{ route('backend.oder_detail.store') }} " enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số lượng</label>
                                <input type="hidden" class="form-control" id="" placeholder="Điền tên danh mục " name="oder_id" value="{{$oder_id}}">
                                <input type="text" class="form-control" id="" placeholder="số lượng " name="quantity">
                                @error('quantity')
                                <div style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Chọn sản phẩm</label>
                                <select class="form-control select2" style="width: 100%;" name="product_id">
                                    @foreach ($products as $product)

                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                    
                                </select>
                                @error('product_id')
                                <div style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            {{-- <button type="submit" class="btn btn-default">Huỷ bỏ</button> --}}
                            <button type="submit" class="btn btn-sucess">Tạo mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection