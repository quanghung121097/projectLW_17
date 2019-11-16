<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h1 style="color: #FE2E2E;"><i>Chúc mừng {{$name}} đã đặt hàng thành công</i></h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Đơn giá</th>
				<th>Ảnh sản phẩm</th>
			</tr>
		</thead>
		<tbody>
			@php
			$thanhtien=0;
			@endphp
			@foreach($carts as $cart)
			<tr>
				<td>{{$cart->id}}</td>
				<td>{{$cart->name}}</td>
				<td>{{$cart->qty}}</td>
				<td>{{number_format($cart->price)}} Vnđ</td>
				<td>
					@if(count($cart->options) > 0)
					<img src="/{{$cart->options->image}}" alt="" width="80px" height="100px">
					@endif
				</td>
			</tr>
			@php
			$tong=$cart->qty*$cart->price;
			$thanhtien += $tong;
			@endphp
			@endforeach

			<tr style="margin-top: 50px;">
				<td colspan="5">Tổng (+10% vat): {{number_format($thanhtien + ($thanhtien*0.1))}} Vnđ</td>
			</tr>
		</tbody>
	</table>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>