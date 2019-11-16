@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tạo người dùng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                <li class="breadcrumb-item active">Tạo mới</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
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
                    <h3 class="card-title">Tạo mới người dùng</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route('backend.user.store')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên</label>
                            <input type="text" class="form-control" id="" placeholder="Tên người dùng" name="name" value="{{old('name')}}">
                            @error('name')
                            <br><div class="" style="color: red;">* {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Avatar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar" multiple>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>

                            </div>

                            @error('avatar')
                            <br><div class="" style="color: red;">* {{ $message }}</div>
                            @enderror
                                {{-- @error('images.*')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror --}}
                                {{-- @if(isset($info_img))
                                @foreach($info_img as $info)
                                <img src="/storage/{{$info}}" alt="">
                                @endforeach
                                @endif --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="" placeholder="Email" name="email" value="{{old('email')}}">
                                @error('email')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="password" class="form-control" id="" name="password">
                                @error('password')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="number" class="form-control" name="phone" id="" value="{{old('phone')}}">
                                @error('phone')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <select class="form-control select2" style="width: 100%;" name="is_admin">
                                    <option>--Chọn quyền---</option>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                                @error('is_admin')
                                <br><div class="" style="color: red;">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-default">Huỷ bỏ</button>
                            <button type="submit" class="btn btn-danger">Tạo mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection