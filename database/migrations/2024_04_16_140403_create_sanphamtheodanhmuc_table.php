<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('masanpham');
            $table->string('tensanpham');
            $table->string('soluong');
            $table->integer('dongia');
            $table->string('hinhanh');
            $table->text('motangan');
            $table->text('chitietsanpham');
            $table->string('ngayphathanh');
            $table->integer('soluongdaban');
            $table->tinyInteger('tinhtrang')->default(0);
            $table->unsignedBigInteger('id_theloai');
            $table->foreign('id_theloai')->references('id')->on('theloai')->onDelete('cascade');
            $table->string('nguoithem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanphamtheodanhmuc');
    }
};
