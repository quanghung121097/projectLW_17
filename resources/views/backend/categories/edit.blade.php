@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">category</a></li>
                <li class="breadcrumb-item active">Update category</li>
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
                        <h3 class="card-title">Update category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('backend.category.update',$category->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên category</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Điền tên category" value="{{$category->name}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Depth</label>
                                <input type="text" name="depth" class="form-control" id="" placeholder="" value="{{$category->depth}}">
                                @error('depth')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Logo:  </label>
                                <img src="/{{$category->logo}}" width="100px" height="100px">
                                <div class="input-group" style="margin-top: 20px">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="logo" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>

                                </div>

                                @error('logo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                {{-- @error('images.*')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror --}}
                                {{-- @if(isset($info_img))
                                @foreach($info_img as $info)
                                <img src="/storage/{{$info}}" alt="">
                                @endforeach
                                @endif --}}
                            </div>
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select name="parent_id" class="form-control select2" style="width: 100%;">
                                    <option value="0" @if($category->parenr_id==0) selected @endif>--Danh mục cha---</option>
                                    
                                    @foreach($categories as $cate)

                                    <option value="{{$cate->id}}" @if($category->parent_id==$cate->id) selected @endif @if($category->id==$cate->id)
                                     disabled
                                    @endif>{{$cate->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id')
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
            var content = '<?=preg_replace( "/\r|\n/", "", $category->content )?>';
            CKEDITOR.instances['content'].setData(content);
        </script>
        @endsection