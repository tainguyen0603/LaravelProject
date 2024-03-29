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
            'options' => ['hinhanh' => $sanpham[0]->hinhanh],
        ]);
        // Cart::destroy();
        return redirect(route('chitietsanpham', ['id' => $id]))->with('AddSuccess', 'Đã thêm sản phẩm vào giỏ hàng');
    }
}
