@extends('AdminLayout.layout')
@section('content')
<div id="wp-content">
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Cập nhật danh mục
                    </div>
                    <!-- @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif -->
                    <div class="card-body">
                        <form action="{{ route('xulycapnhatdanhmucsanpham') }}" method="GET" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên danh mục</label>
                                <input class="form-control" type="text" value="{{$tendanhmuc[0]->ten_danhmuc}}" name="name_category" >
                                <input class="form-control" type="text" value="{{$tendanhmuc[0]->id_danhmuc}}" name="id_category"  hidden>

                                @error('name_category')
                                <small class='form-text text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" name="btn-add-category" class="btn btn-primary">Cập nhật danhh mục</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection