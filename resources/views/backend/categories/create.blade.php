@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tạo danh mục</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                <li class="breadcrumb-item active">Tạo danh mục</li>
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
                        <h3 class="card-title">Tạo danh mục</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ route('backend.category.store') }} " enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" class="form-control" id="" placeholder="Điền tên danh mục " name="name">
                                @error('name')
                                <div style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Danh mục cha</label>
                                <select class="form-control select2" style="width: 100%;" name="parent_id">
                                    <option value="0">--Danh mục cha---</option>
                                    @foreach ($categories as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                    
                                </select>
                                @error('parent_id')
                                <div style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Logo:  </label>
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
                                <div style="color: red;">* {{ $message }}</div>
                                @enderror
                                {{-- @error('images.*')
                                <div style="color: red;">* {{ $message }}</div>
                                @enderror --}}
                                {{-- @if(isset($info_img))
                                @foreach($info_img as $info)
                                <img src="/storage/{{$info}}" alt="">
                                @endforeach
                                @endif --}}
                            </div>
                            {{-- <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh danh mục</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label>Depth</label>
                                <input type="number" class="form-control" id="" placeholder="" name="depth">
                            </div>
                            @error('depth')
                            <div style="color: red;">* {{ $message }}</div>
                            @enderror
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