@extends('UserLayout.layout')
@section('content')

<div id="wp-content">
    <div id="cart">
        <div class="list-product-cart">
            <form action="{{route('capnhatgiohang')}}" method="GET">


                <table id="listcart_max">

                    <thead>
                        <tr>
                            <td>Stt</td>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td>Thành tiền</td>
                            <td>Xóa khỏi giỏ hàng</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $count = 0; ?>
                        @foreach(Cart::content() as $row)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$row->options->masanpham}}</td>
                            <td><a href="?mod=home&action=detailproduct&id="><img src="{{asset('admin/images/'.$row->options->hinhanh)}}" alt=""></a></td>
                            <td>{{$row->name}}</td>

                            <td><?php echo number_format($row->price) ?></td>
                            <td><input type="number" class="num_order" name="qty[{{$row->rowId}}]" value="{{$row->qty}}" min="1" max="{{$row->options->soluong}}"></td>
                            <td><span><?php echo number_format($row->price * $row->qty) ?></span></td>
                            <td><a href="{{route('xoaxamphamgiohang',['rowID'=>$row->rowId])}}"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>



                <p id="total_cart">Thành tiền : <strong>{{Cart::total()}} VNĐ</strong></p>
                <div class="update-checkout">
                    <input type="submit" name="btn-update-cart" id="" value="Cập nhật giỏ hàng" class="update-cart">
                    <a href="?mod=cart&action=checkout" class="checkout">Thanh toán</a>
                </div>

                <span>Click vào <strong>"Cập nhật giỏ hàng"</strong>để cập nhật số lượng,Click thanh toán để hoàn thành đơn hàng</span><br>
                <a href="trangchu">Mua tiếp</a>
                <a href="{{route('xoagiohang')}}">Xóa giỏ hàng</a>
            </form>
        </div>

    </div>
</div>

@endsection