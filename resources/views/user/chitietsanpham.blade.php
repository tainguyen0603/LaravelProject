@extends('UserLayout.layout')
@section('content')




<div id="wp-content">
    <div class="detailproduct">
        <div class="detail">
            <div class="image">
                <a href=""><img src="{{asset('admin/images/'.$sanphambyid[0]->hinhanh)}}" alt=""></a>
            </div>
            <div class="more-info">
                <h2 class="nameproduct">{{$sanphambyid[0]->tensanpham}}</h2>
                <div class="desc">
                    {!!$sanphambyid[0]->motangan!!}
                </div>
                <h3>Còn hàng</h3>
                <span class="price"><?php echo number_format($sanphambyid[0]->dongia) ?> VNĐ</span>
                <a href="" style="text-decoration: none;">Thêm vào giỏ hàng</a>
            </div>
        </div>


        <div class="descproduct">
            <h2>Mô tả sản phẩm</h2>
            <p>{!!$sanphambyid[0]->chitietsanpham!!}</p>

        </div>


    </div>


</div>

@endsection