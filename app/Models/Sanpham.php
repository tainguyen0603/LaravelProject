<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table ='sanpham';
    protected $fillable = ['id', 'masanpham', 'tensanpham','soluong','dongia','hinhanh','motangan','chitietsanoham','soluongdaban','tinhtrang','id_danhmuc'];
    use HasFactory;
}
