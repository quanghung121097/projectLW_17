@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update user</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">user</a></li>
                <li class="breadcrumb-item active">Update user</li>
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
                        <h3 class="card-title">Update user</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('backend.user.update',$user->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên user</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Điền tên user" value="{{$user->name}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" id="" placeholder="Điền tên user" value="{{$user->email}}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Avatar:  </label>
                                <img src="/{{$user->avatar}}" width="100px" height="100px">
                                <div class="input-group" style="margin-top: 20px">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="avatar" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>

                                </div>

                                {{-- @error('images')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror --}}
                                @error('avatar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                {{-- @if(isset($info_img))
                                @foreach($info_img as $info)
                                <img src="/storage/{{$info}}" alt="">
                                @endforeach
                                @endif --}}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" id="" placeholder="Điền tên user" value="{{$user->phone}}">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="" >
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Quyền truy cập</label>
                                @if($userlogin->is_admin==1)
                                <select name="is_admin" class="form-control select2" style="width: 100%;">
                                    <option>--Chọn trạng thái---</option>
                                    <option value="0" @if($user->is_admin==0) selected @endif>user</option>
                                    <option value="1" @if($user->is_admin==1) selected @endif>admin</option>
                                </select>
                                @error('is_admin')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @else
                                <select name="is_admin" class="form-control select2" style="width: 100%;">
                                    <option>--Chọn trạng thái---</option>
                                    <option value="0" @if($user->is_admin==0) selected @endif>user</option>
                                    
                                </select>
                                @error('is_admin')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                @endif
                                
                                
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
            var content = '<?=preg_replace( "/\r|\n/", "", $user->content )?>';
            CKEDITOR.instances['content'].setData(content);
        </script>
        @endsection