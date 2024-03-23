<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhMucController;
use App\Models\trangthaisanpham;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trangchu', function () {
    return view('user.trangchu');
});
Route::get('/dangnhap', function () {
    return view('user.dangnhap');
});

Route::get('/dangky', function () {
    return view('user.dangky');
});

Route::get('/giohang', function () {
    return view('user.giohang');
});

Route::get('/thanhtoan', function () {
    return view('user.thanhtoan');
});


Route::get('/admin/trangchu', function () {
    // $trangthaisanpham= new  trangthaisanpham();
    // $all= $trangthaisanpham->all();
    // echo $all;
    return view('admin.trangchu');
});

Route::get('/admin/danhsachsanpham', function () {
    return view('admin/danhsachsanpham');
});

Route::get('/admin/themsanpham', function () {
    return view('admin/themsanpham');
});

Route::get('/admin/danhmucsanpham',[DanhMucController::class, 'loaddanhmuc']);

Route::get('/admin/themdanhmucsanpham', [DanhMucController::class, 'taodanhmuc'])->name('taodanhmuc');
Route::post('/admin/xulydanhmuc', [DanhMucController::class, 'xuly'])->name('xuly');

Route::get('/admin/danhsachkhachhang', function () {
    return view('admin/danhsachkhachhang');
});

Route::get('/admin/thongtincanhan', function () {
    return view('admin/thongtincanhan');
});
Route::get('/admin/capnhatdonhang', function () {
    return view('/admin/capnhatdonhang');
});
