@extends("AdminLayout.layout")
@section('content')
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Thông tin cá nhân
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="name">Họ và tên</label>
                                <input class="form-control" type="text" name="fullname" value="Trần QUang Đạo" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Tên đăng nhập</label>
                                <input class="form-control" type="text" name="username" value="quangdao2601" readonly="readonly" id="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" value="tranquangdao2601@gmail.com" readonly="readonly" id="email">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <textarea name="address" class="form-control" id="" cols="30" rows="5">Viettl</textarea>
                            </div>



                            <input type="submit" class="btn btn-primary" name="btn-update" value="Cập nhật" id="">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection