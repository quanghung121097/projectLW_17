@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tạo sản phẩm</h1>
            <a style="display: inline-block; margin-top: 30px;" href="{{route('backend.product.index')}}" class="btn btn-warning">Quay lại</a>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Tạo sản phẩm</li>
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
                        <h3 class="card-title">Tạo sản phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ route('backend.product.store') }} " enctype="multipart/form-data" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Điền tên sản phẩm" value="{{old('name')}}">
                                @error('name')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select name="category_id" class="form-control select2" style="width: 100%;">
                                    <option>--Chọn danh mục---</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá gốc</label>
                                        <input type="text" name="origin_price" class="form-control" placeholder="Điền giá gốc" value="{{old('origin_price')}}">
                                    </div>
                                    @error('origin_price')
                                    <br><div class="" style="color: red;">* {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá bán</label>
                                        <input type="text" name="sale_price" class="form-control" placeholder="Điền giá gốc" value="{{old('sale_price')}}">
                                    </div>
                                    @error('sale_price')
                                    <br><div class="" style="color: red;">* {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                <textarea name="content" value="{{old('content')}}" ></textarea>
                                {{-- <input type="text" name="content" class="form-control" placeholder="Mô tả sp"> --}}
                                @error('content')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="images[]" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>

                                </div>

                                @error('images')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                                @error('images.*')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                                {{-- @if(isset($info_img))
                                @foreach($info_img as $info)
                                <img src="/storage/{{$info}}" alt="">
                                @endforeach
                                @endif --}}
                            </div>
                            <div class="form-group">
                                <label>Trạng thái sản phẩm</label>
                                <select name="status" class="form-control select2" style="width: 100%;">
                                    <option>--Chọn trạng thái---</option>
                                    <option value="0">Đang nhập</option>
                                    <option value="1">Mở bán</option>
                                    <option value="-1">Hết hàng</option>
                                </select>
                                @error('status')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('backend.product.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-success">Tạo mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('js')
        <script>
            CKEDITOR.replace( 'content' );
        </script>

        @endsection