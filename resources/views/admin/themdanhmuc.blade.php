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
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                    <div class="card-body">
                        <form action="{{ route('xuly') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="name">Tên danh mục</label>
                                <input class="form-control" type="text" name="name_category" id="name">
                            </div>
                            <p>Name: {{ $data['name'] }}</p>
<p>Age: {{ $data['age'] }}</p>
                          
                    



                            <button type="submit" name="btn-add-category" class="btn btn-primary">Thêm dnah mục</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection