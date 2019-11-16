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
    @endsection
    @section('content')
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update sản phẩm</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('backend.product.update',$product->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="card-body">
                            <div class="form-group">
                                
                                <input type="hidden" name="id" class="form-control" id="" placeholder="Điền tên sản phẩm" value="{{$product->id}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" id="product_name" placeholder="Điền tên sản phẩm" value="{{$product->name}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select name="category_id" class="form-control select2" style="width: 100%;">
                                    <option>--Chọn danh mục---</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($product->category_id==$category->id) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá gốc</label>
                                        <input type="text" name="origin_price" class="form-control" placeholder="Điền giá gốc" value="{{$product->origin_price}}">
                                    </div>
                                    @error('origin_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Giá bán</label>
                                        <input type="text" name="sale_price" class="form-control" placeholder="Điền giá gốc" value="{{$product->sale_price}}">
                                    </div>
                                    @error('sale_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                                <textarea name="content"></textarea>
                                @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                                <a href="{{route('backend.product.editimg',$product->id)}}" class="btn btn-danger">Quản lý</a>
                                <div>
                                    {{-- @foreach ($images as $image) 
                                    @if ($image->product_id==$product->id) 
                                    <img src="{{$image->path}}" width="100px" height="100px">
                                    @else 
                                    <p>chưa có ảnh</p>

                                    @endif
                                    
                                    @endforeach --}}
                                    @if(isset($product->images))
                                    @foreach($product->images as $img)
                                    &nbsp;
                                    <img src="/{{$img->path}}" width="80px" height="80px">
                                    {{-- <a style="display: inline-block; " href="{{route('backend.product.deleteimg',$img->id),$product->id}}" class="btn btn-danger" id="deleteproduct"><i class="fas fa-trash-alt"></i></a> --}}
                                    &nbsp;
                                    @endforeach
                                    
                                    @endif
                                </div>
                                <label for="exampleInputFile">Thêm hình ảnh</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="images[]" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái sản phẩm</label>
                                <select name="status" class="form-control select2" style="width: 100%;">
                                    <option>--Chọn trạng thái---</option>
                                    <option value="0" @if($product->status==0) selected @endif>Đang nhập</option>
                                    <option value="1" @if($product->status==1) selected @endif>Mở bán</option>
                                    <option value="-1" @if($product->status==-1) selected @endif>Hết hàng</option>
                                </select>
                                @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="{{ route('backend.product.index') }}" class="btn btn-default">Huỷ bỏ</a>
                            <button type="submit" class="btn btn-success">Update mới</button>
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
        <script>
            var content = '<?=preg_replace( "/\r|\n/", "", $product->content )?>';
            CKEDITOR.instances['content'].setData(content);
        </script>
        @endsection