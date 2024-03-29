<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Sanpham;

class CartController extends Controller
{
    public $sanpham;
    public function __construct()
    {
        $this->sanpham = new Sanpham();
    }
    public function AddToCart($id)
    {
        $sanpham = $this->sanpham->LoadSanPhamById($id);
        Cart::add([
            'id' => $sanpham[0]->id,
            'name' => $sanpham[0]->tensanpham,
            'price' => $sanpham[0]->dongia,
            'qty' => 1,
            'options' => ['hinhanh' => $sanpham[0]->hinhanh, 'masanpham' => $sanpham[0]->masanpham, 'soluong' => $sanpham[0]->soluong],
        ]);
        // Cart::destroy();
        return redirect(route('chitietsanpham', ['id' => $id]))->with('AddSuccess', 'Đã thêm sản phẩm vào giỏ hàng');
    }
    public function GioHang()
    {
        return view('user.giohang');
    }
    public function xoaxamphamgiohang($rowID)
    {
        Cart::remove($rowID);
        return redirect(route('giohang'));
    }
    public function xoagiohang()
    {
        Cart::destroy();
        return redirect(route('giohang'));
    }
    public function capnhatgiohang(Request $request)
    {
        foreach ($request->input('qty') as $key => $val) {
            Cart::update($key, ['qty' => $val]);
        }
        return redirect(route('giohang'));
    }
}
