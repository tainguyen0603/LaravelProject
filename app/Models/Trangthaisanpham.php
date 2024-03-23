<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trangthaisanpham extends Model
{
    protected $table ='trangthaisanpham';
    protected $fillable = ['id_trangthainguoidung', 'tentrangthai'];
    use HasFactory;
}
