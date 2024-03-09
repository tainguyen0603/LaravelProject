@extends('AdminLayout.layout')
@section('content')
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm sản phẩm
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá</label>
                                <input class="form-control" type="number" name="price" id="name">
                            </div>
                            <div class="form-group">
                                <label for="code">Mã sản phẩm</label>
                                <input class="form-control" type="text" name="code" id="name">
                            </div>
                            <div class="form-group">
                                <label for="num">Số lượng</label>
                                <input class="form-control" type="text" name="num" id="name">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="intro">Mô tả sản phẩm</label>
                                <textarea name="desc" class="ckeditor form-control" id="intro" cols="30" rows="12"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="intro">Chi tiết sản phẩm</label>
                                <textarea name="content" class="ckeditor form-control" id="intro" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="">Anh sản phẩm</label>
                                <input class="form-control" type="file" name="image" id="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="">Danh mục</label>
                                <select class="form-control" name="category" id="">

                                    <option value="iphone">Iphone</option>
                                    <option value="samsung">Sam Sung</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <select name="status" id="" class="form-control">
                                    <option value="1">Chờ Duyệt</option>
                                </select>
                            </div>
                        </div>
                    </div>








                    <input type="submit" name="btn-add-product" class="btn btn-primary" value="Thêm sản phẩm">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection