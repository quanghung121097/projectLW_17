@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
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
                    <h3 class="card-title">Sản phẩm mới nhập</h3>
                    <br>
                    <i class="alert " style="color: red;">
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
                    </i>
                    
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
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Người tạo</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><a href="{{route('backend.product.show',$product->id)}}">{{$product->name}}</a></td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->user->name}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    @php
                                    if ($product->status==0) {
                                        echo 'Đang nhập';
                                    } else if($product->status==1) {
                                        echo 'Mở bán';
                                    }elseif ($product->status==-1) {
                                        echo 'Hết hàng';
                                    }
                                    @endphp
                                </td>
                                <td>
                                    @if(isset($product->images))
                                    <img src="/{{$product->images[0]->path}}" alt="" width="100px" height="100px">
                                    @endif
                                </td>
                                <td>
                                   

                                    @can('update',$product)
                                     <a style="display: inline-block; width: 67px;" href="{{route('backend.product.edit',$product->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('backend.product.destroy',$product->id)}}" data-toggle="modal" data-target="#exampleModalCenter-{{$product->id}}" class="btn btn-danger">Delete</a>
                                        <div class="modal fade" id="exampleModalCenter-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle" style="display: inline-block;">Bạn có chắc chắn xóa ko?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                         <h4>Bạn chắc chắn muốn xóa?</h4>
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <form style="display: inline-block;" action="{{route('backend.product.destroy',$product->id)}}" method="post" accept-charset="utf-8">
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
                    {!! $products->links() !!}
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
    CKEDITOR.replace( 'content' );
</script>
<script>
    var content = {{preg_replace( "/\r|\n/", "", $product->content )}};
    CKEDITOR.instances['content'].setData(content);
</script>
{{-- <script>
    $("#deleteproduct").click(function(){
        return confirm("Bạn chắc chắn xóa không ?");
    });
</script> --}}
@endsection