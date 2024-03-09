@extends('AdminLayout.layout')
@section('content')
<div id="wp-content">
    <div class="container-fluid py-5">
        <div class="card">
            <div class="card-header font-weight-bold">
                ĐƠN HÀNG MỚI
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Mã Đơn Hàng</th>
                            <th scope="col">Khách hàng</th>
                            <th scope="col">Số điện thoại liên lạc</th>
                            <th scope="col">Giá trị</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">0</th>
                            <td>ĐH6</td>
                            <td>
                                Trần Quang Đạo
                            </td>
                            <td>0961256443</td>
                            <td>15.000.000 VNĐ</td>
                            <td>10</td>
                            <td> 2022-04-18 00:00:00</td>
                            <td><span class="badge badge-warning">Đã hoàn thành</span></td>
                            <td> <a href="capnhatdonhang" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                            </td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
@endsection