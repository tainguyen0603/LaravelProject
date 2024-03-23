<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\danhmuc;
use Illuminate\Support\Facades\DB;


class DanhMucController extends Controller
{
    public function loaddanhmuc(){
        $danhmuc = new Danhmuc();
        $dsdanhmuc = $danhmuc->loaddanhmuc();
        return view("admin.danhmuc")->with("tendanhmuc",$dsdanhmuc);
    }
    
    public function taodanhmuc (){
        $data = ['name' => 'John', 'age' => 30];
        return view("admin.themdanhmuc")->with('data',$data);

    }
    public function xuly(Request $request)
{
    return redirect()->route('taodanhmuc')->with('success', 'Đã thêm danh mục thành công');

    // $name = $request->input('name_category');

}}
