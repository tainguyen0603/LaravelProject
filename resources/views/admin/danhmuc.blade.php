@extends('AdminLayout.layout')
@section('content')
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="row">

            <div class="col-7">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Danh sách danh mục sản phẩm
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="card-body">
                        <table class="table table-striped table-checkall">
                            <thead>
                                <tr>

                                    <th scope="col">STT</th>
                                    <th scope="col">Tên danh mục</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tendanhmuc as $value)
                                <tr class="">
                                    <td>1</td>
                                    <td>{{$value->ten_danhmuc}}</td>
                                    <td>
                                        <a href="{{route('capnhatdanhmucsanpham',['id'=>$value->id_danhmuc])}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                        <!-- <a href="" cl  ass="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <style>
                            #addCate {
                                display: none;
                            }
                        </style>
                        <form action="" id="addCate" method="POST" enctype="multipart/form-data">
                            @csrf
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
        <form>

        </form>
    </div>
    @endsection