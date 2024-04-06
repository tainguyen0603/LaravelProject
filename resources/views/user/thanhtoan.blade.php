@extends('UserLayout.layout')
@section('content')

<div id="wp-content">
<form action="" method="post">
        <div id="checkout">

            <div class="info-customer">
                <h2>Thông tin khách hàng</h2>

                <label for="">Họ và tên</label>
                <input type="text" name="fullname" value="Trần Quang Đạo" placeholder="Họ và tên" id="">
             

                <label for="">Email</label>
                <input type="text" name="email" readonly="readonly" value="124@gmail.com " placeholder="Email" id="">


                <label for="">Số điện thoại liên lạc</label>
                <input type="text" name="phone" value="" placeholder="Số điện thoại" id="">

                <label for="">Địa chỉ giao hàng</label>
                <textarea name="address" placeholder="Địa chỉ giao hàng" id="" cols="30" rows="10">hóc môn</textarea>

                <label for="">Ghi chú</label>
                <textarea name="notes" placeholder="Ghi chú" id="" cols="30" rows="10"></textarea>

            </div>
            <div class="info-cart">
                
                    <h2>Thông tin đơn hàng</h2>
                    <table>
                        <thead>
                            <tr>
                                <td>Sản phẩm</td>
                                <td>Tổng</td>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td>IP 13 Promaxx <strong>x <span> 10 </span></strong></td>
                                    <td><strong>200 000 000 vnđ</strong> </td>
                                </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Tổng đơn hàng:</td>
                                <td><strong>200 000 000 vnđ</strong></td>
                            </tr>
                        </tfoot>

                    </table>
                    <p>Hình thức thanh toán</p>
                    <select name="method" id="" style="padding: 10px;">
                        <option  value="">--Hình thức thanh toán--</option>
                        <option value="0">Thanh Toán Khi nhận hàng</option>
                        <option value="1">Thanh toán qua thẻ</option>
                    </select>


                    <input type="submit" name="btn-checkout" id="" value="Đặt hàng">

                
             
            </div>

        </div>
    </form>
</div>

@endsection