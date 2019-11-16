@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Chi tiết đơn hàng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">đơn hàng</a></li>
                <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
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
                    <h3 class="card-title">đơn hàng</h3>
                    <br>
                    <a style="display: inline-block; margin-top: 30px;" href="{{route('backend.oder.index')}}" class="btn btn-warning">Danh sách đơn hàng</a>
                    @if($oder->status==0||$oder->status==1)
                    <a style="display: inline-block; margin-top: 30px;" href="{{route('backend.oder_detail.create',$oder->id)}}" class="btn btn-success">Thêm sản phẩm</a>
                    @endif
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
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($oder_details as $key => $oder_detail)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><a href="{{route('backend.product.show',$oder_detail->product->id)}}">{{$oder_detail->product->name}}</a></td>
                                <td>{{$oder_detail->product->category->name}}</td>
                                <td>{{$oder_detail->quantity}}</td>
                                <td>{{number_format($oder_detail->subtotal)}} Vnđ</td>
                                <td>
                                    @if(isset($oder_detail->product->images))
                                    <img src="/{{$oder_detail->product->images[0]->path}}" alt="" width="100px" height="100px">
                                    @endif
                                </td>
                                @if($oder->status!=2)
                                <td>
                                    <a href="{{route('backend.oder_detail.destroy',[$oder_detail->id,$oder_detail->oder_id])}}" data-toggle="modal" data-target="#exampleModalCenter-{{$oder_detail->id}}" class="btn btn-danger">Delete</a>
                                    <div class="modal fade" id="exampleModalCenter-{{$oder_detail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <form style="display: inline-block;" action="{{route('backend.oder_detail.destroy',[$oder_detail->id,$oder_detail->oder_id])}}" method="post" accept-charset="utf-8">
                                        @csrf
                                        {{method_field('delete')}}
                                        <button type="submit" class="btn btn-danger">Đồng ý</button>
                                    </form>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>
    {!! $oder_details->links() !!}
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

@endsection