<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Danhmuc extends Model
{
    protected $table ='danhmuc';
    protected $fillable = ['ten_danhmuc', 'id_danhmuc', 'trangthai'];
    use HasFactory;
    public function loaddanhmuc(){
        $tendanhmuc = DB::table('danhmuc')->select('*')->get();
        return $tendanhmuc;
        }
}
