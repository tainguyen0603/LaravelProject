@extends('UserLayout.layout')
@section('content')

<div id="wp-content">
    <div id="cart">
        <div class="list-product-cart">
            <form action="" method="POST">


                <table id="listcart_replace">

                    <thead>
                        <tr>

                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Xóa khỏi giỏ hàng</td>
                        </tr>
                    </thead>
                    <tbody>



                        <tr>


                            <td><a href=""><img src="https://vtv1.mediacdn.vn/2019/10/10/photo-1-15706463929181755249740.jpg" alt=""></a></td>
                            <td>Ip 12 promaxx <strong>X 10</strong></td>

                            <td>120 000 000 VNĐ</td>
                            <td><i class="fa-solid fa-trash"></i></td>
                        </tr>






                    </tbody>
                </table>
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

                       
                            <tr>
                                <td>1</td>
                                <td>#1234567</td>
                                <td><a href="?mod=home&action=detailproduct&id="><img src="https://vtv1.mediacdn.vn/2019/10/10/photo-1-15706463929181755249740.jpg" alt=""></a></td>
                                <td>iP13 PRO MAX</td>

                                <td>14 000 000 vnđ</td>
                                <td><input type="number"  class="num_order" value="4" min="1" max="10"></td>
                                <td><span>120 000 000 vnđ</span></td>
                                <td><a href=""  target="?mod=cart&action=deleteproductcart&id=" ><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                 






                    </tbody>
                </table>

                <h3>Không có sản phẩm nào trong giỏ hàng</h3>

                <p id="total_cart">Thành tiền : <strong>200 000 000 vnđ</strong></p>
                <div class="update-checkout">
                    <input type="submit" name="btn-update-cart" id="" value="Cập nhật giỏ hàng" class="update-cart">
                    <a href="?mod=cart&action=checkout" class="checkout">Thanh toán</a>
                </div>
                <span>Click vào <strong>"Cập nhật giỏ hàng"</strong>để cập nhật số lượng,Click thanh toán để hoàn thành đơn hàng</span><br>
                <a href="trangchu">Mua tiếp</a>
                <a href="?mod=cart&action=deletecart">Xóa giỏ hàng</a>
            </form>
        </div>

    </div>
</div>

@endsection