<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Danhmuc extends Model
{
    protected $table = 'danhmuc';
    protected $fillable = ['ten_danhmuc', 'trangthai'];
    use HasFactory;
    public function loaddanhmuc()
    {
        $tendanhmuc = DB::table('danhmuc')->select('*')->get();
        return $tendanhmuc;
    }
    public static function themdanhmuc($name)
    {
        $db = db::table('danhmuc')->insert(['ten_danhmuc' => $name, 'trangthai' => 0]);
        if ($db) {
            return redirect()->route('loaddanhmuc')->with('success', 'Đã thêm danh mục thành công');
        }
        return redirect()->route('themdanhmuc')->with('error', 'thêm thất bại');
    }
    public function getdanhmuc($id)
    {
        return $tendanhmuc = DB::table('danhmuc')->select('*')->where('id_danhmuc', '=', $id)->get();
    }
    public static function capnhatdanhmuc($name, $id)
    {
        $db = DB::table('danhmuc')->where('id_danhmuc', $id)->update(['ten_danhmuc' => $name]);
        if ($db) {
            return redirect()->route('loaddanhmuc')->with('success', 'Đã cập nhật danh mục thành công');
        }
        return redirect()->route('capnhatdanhmucsanpham',['id'=>$id])->with('error', 'thêm thất bại');
    }
}
