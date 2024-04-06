@extends('AdminLayout.layout')
@section('content')
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Thêm danh mục
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Tên danh mục</label>
                                <input class="form-control" type="text" name="name_category" id="name">
                            </div>
                          
                    



                            <button type="submit" name="btn-add-category" class="btn btn-primary">Thêm dnah mục</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection