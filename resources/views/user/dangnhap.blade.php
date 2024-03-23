@extends('UserLayout.layout')
@section('content')

<style>
    #form .form-login .err_usernamelogin p,
    #form .form-login .err_passwordlogin p {
        color: red;
        margin: 10px auto;
        width: 50%;
    }
</style>

    <div id="form">
        <div class="form-login">
            <h2>Xin chào,Đăng nhập tài khoản</h2>
            <form action="{{route('dangnhap.post')}}" id="btnlogin" method="POST">
	    @csrf
                <label for="">Tên tài khoản</label>
                <input type="text" name="username" id="usernamelogin" value="" placeholder="Tên đăng nhập" />
                <div class="err_usernamelogin"></div>
                <label for="">Mật khẩu</label>
                <input type="password" id="passwordlogin" placeholder="Mật khẩu" value="" name="psssword" />
                <div class="err_passwordlogin"></div>
                <input type="submit" name="btn-login" id="" value="Đăng nhập" />
            </form>
           
        </div>
    </div>
</div>


@endsection