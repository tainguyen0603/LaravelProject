@extends('AdminLayout.layout')
@section('content')
<style>
    table tbody tr td {
        text-align: center;
    }

    table thead tr th {
        width: 12%;
        text-align: center;
    }

    table thead tr th:first-child {
        width: 5%;
    }

    table tbody tr td img {
        width: 70%;
        height: auto;
    }
</style>
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Cập nhật đơn hàng đơn hàng
            </div>
            <div class="card-body">
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <!-- <th scope="col">
                                <input name="checkall" type="checkbox">
                            </th> -->
                            <th scope="col">STT</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="">
                            <td>1</td>
                            <td><img src="https://vtv1.mediacdn.vn/2019/10/10/photo-1-15706463929181755249740.jpg" alt=""></td>
                            <td>#234567</td>
                            <td><a href="#">Ip 12 pro max</a></td>
                            <td>10 000 000 vnđ</td>
                            <td>20</td>
                            <td>200 000 000 vnd</td>
                        </tr>





                    </tbody>
                </table>
                <form action="" method="POST">
                    <label class="form-control" for="">Địa chỉ giao hàng</label>
                    <textarea name="address" id="" cols="20" class="form-control" rows="4">viettel</textarea>
                    <label class="form-control" for="">Ghi chú</label>
                    <textarea name="notes" id="" cols="20" class="form-control" rows="4">Giao gấp</textarea>
                    <select name="trangthai" class="form-control" style="margin: 10px 0px;" id="">

                        <option value="">Đã hoàn thành</option>
                        <option value="">Đang xử lý</option>
                    </select>

                    <button type="submit" name="btn-add-category" class="btn btn-primary">Cập nhật đơn hàng</button>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection