@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sách người dùng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
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
                    <h3 class="card-title">Danh sách người dùng</h3>
                    <br>
                    <div class="alert alert-danger">
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
                    </div>
                    
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
                                <th>Email</th>
                                <th>Tên</th>
                                <th>Thời gian</th>
                                <th>Quyền</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    @if($value->is_admin==1)
                                    <i>Admin</i>
                                    @else
                                    <i>User</i>
                                    @endif
                                </td>
                                <td>
                                   
                                    <a style="display: inline-block; width: 67px;" href="{{route('backend.user.edit',$value->id)}}" class="btn btn-warning">Edit</a>
                                     @can('delete',$userlogin)
                                    <a href="{{route('backend.user.destroy',$value->id)}}" data-toggle="modal" data-target="#exampleModalCenter-{{$value->id}}" class="btn btn-danger">Delete</a>
                                    <div class="modal fade" id="exampleModalCenter-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle" style="display: inline-block;">Xóa user ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                         <h4>Bạn chắc chắn muốn xóa?</h4>
                                     </div>
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form style="display: inline-block;" action="{{route('backend.user.destroy',$value->id)}}" method="post" accept-charset="utf-8">
                                            @csrf
                                            {{method_field('delete')}}
                                            <button type="submit" class="btn btn-danger">Đồng ý</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}
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
    $("#deleteuser").click(function(){
        return confirm("Bạn chắc chắn xóa không ?");
    });
</script>
@endsection