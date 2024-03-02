<?php

use Illuminate\Support\Facades\Route;

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
