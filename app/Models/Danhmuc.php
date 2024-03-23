<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    protected $table ='danhmuc';
    protected $fillable = ['ten_danhmuc', 'id_danhmuc', 'trangthai'];
    use HasFactory;
}
