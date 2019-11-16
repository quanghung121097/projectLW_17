@extends('backend.layouts.master')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Chi tiết sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
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
                    <a style="display: inline-block; margin-top: 30px;" href="{{route('backend.product.index')}}" class="btn btn-warning">Danh sách sản phẩm</a>
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

                        <tr>
                            <th>ID:<br> {{$product->id}}</th>
                            <th>Tên sản phẩm:<br> {{$product->name}}</th>
                            <th>Danh mục:<br> {{$product->category->name}}</th>
                            <th>Người tạo:<br> {{$product->user->name}}</th>
                            <th>Thời gian:<br> {{$product->created_at}}</th>
                            <th>Trạng thái:<br> 
                                @php
                                if ($product->status==0) {
                                    echo 'Đang nhập';
                                } else if($product->status==1) {
                                    echo 'Mở bán';
                                }elseif ($product->status==-1) {
                                    echo 'Hết hàng';
                                }
                                @endphp
                            </th>
                            <th>Lượt xem:<br> {{$product->view_count}}</th>
                            <th>Giá gốc:<br> {{$product->origin_price}} Vnđ</th>
                            <th>Giá Sale:<br> {{$product->sale_price}} Vnđ</th>
                        </tr>
                        <tr>
                            <th colspan="9">Ảnh sản phẩm:
                                @if(isset($product->images))
                                @foreach($product->images as $img)
                                <img src="/{{$img->path}}" width="100px" height="100px">
                                @endforeach
                                @endif
                            </th>
                        </tr>
                        <tr>
                            <td colspan="9"><b>Mô tả:</b><br>
                                {!!$product->content!!}
                                
                            </td>
                        </tr>



                    </table>
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
<script>
    $("#deleteproduct").click(function(){
        return confirm("Bạn chắc chắn xóa không ?");
    });
</script>
@endsection