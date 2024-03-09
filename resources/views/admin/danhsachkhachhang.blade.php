@extends('AdminLayout.layout')
@section('content')
<style>
    .form-choose a {
        display: inline-block;
        margin-right: 10px;
        /* border: 1px solid black; */
        padding: 10px;
        text-decoration: none;
        color: black;
        background-color: #ddd;
        font-weight: bold;
    }
</style>

<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
                <h5 class="m-0 ">Quản lý khách hàng</h5>
                <div class="form-search form-inline">
                    <form action="?mod=member&action=index" method="POST" style="display: flex;">
                        <input type="text" name="q" class="form-control form-search" placeholder="Tìm kiếm">
                        <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="card-body">

                <div class="form-action form-inline py-3">
                    <!-- <form action="" method="POST">
                        <select class="form-control mr-1" id="" name="choose">
                            <option value="">Tất cả thành viên</option>
                            <option value="0">Đang hoạt động</option>
                            <option value="1">Đã khóa</option>
                            <option value="2">Đã xóa </option>
                        </select>
                        <input type="submit" name="btn-choose" value="Áp dụng" class="btn btn-primary">
                    </form> -->


                </div>
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            <!-- <th>
                                <input type="checkbox" name="checkall">
                            </th> -->
                            <th scope="col">Stt</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>
                                        <input type="checkbox">
                                    </td> -->
                            <th scope="row">1</th>
                            <td>Trần Quang Đạo</td>
                            <td>quangdao2601</td>
                            <td>tranquangdao2601@gmail.com</td>
                            <td>Đang hoạt động</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <!-- <td>
                                        <input type="checkbox">
                                    </td> -->
                            <th scope="row">1</th>
                            <td>Trần Quang Đạo</td>
                            <td>quangdao2601</td>
                            <td>tranquangdao2601@gmail.com</td>
                            <td>Đang hoạt động</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <!-- <td>
                                        <input type="checkbox">
                                    </td> -->
                            <th scope="row">1</th>
                            <td>Trần Quang Đạo</td>
                            <td>quangdao2601</td>
                            <td>tranquangdao2601@gmail.com</td>
                            <td>Đang hoạt động</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <!-- <td>
                                        <input type="checkbox">
                                    </td> -->
                            <th scope="row">1</th>
                            <td>Trần Quang Đạo</td>
                            <td>quangdao2601</td>
                            <td>tranquangdao2601@gmail.com</td>
                            <td>Đang hoạt động</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <!-- <td>
                                        <input type="checkbox">
                                    </td> -->
                            <th scope="row">1</th>
                            <td>Trần Quang Đạo</td>
                            <td>quangdao2601</td>
                            <td>tranquangdao2601@gmail.com</td>
                            <td>Đang hoạt động</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">

                </nav>
            </div>
        </div>
    </div>
</div>
@endsection