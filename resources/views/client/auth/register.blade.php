@extends('client.layouts.master-login')

@section('tittle-post')
<div class="title_wrap">
    <div class="cat">
        <h1 class="page_title"><a class="" href="index.html"></a></h1>
    </div>
</div>
@endsection

@section('content-post')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <span class="login100-form-title p-b-32">
                    Đăng ký tài khoản
                </span>
                <label class="txt1 p-b-10" for="name">
                    Tên tài khoản
                </label>
                <div class="wrap-input100 m-b-28">
                    <input class="input100" type="text" name="name" id="name" style="height: 55px; border:none">
                    <span class="focus-input100"></span>
                </div>

                <label class="txt1 p-b-10" for="email">
                    Email
                </label>
                <div class="wrap-input100 validate-input m-b-12">
                    <input class="input100" type="email" name="email" id="email" style="height: 55px; border:none">
                    <span class="focus-input100"></span>
                </div>

                <label class="txt1 p-t-11 p-b-10" for="password">
                    Mật khẩu
                </label>
                <div class="wrap-input100 validate-input m-b-12">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" id="password">
                    <span class="focus-input100"></span>
                </div>
                <label class="txt1 p-t-11 p-b-10" for="password_confirmation ">
                    Nhập lại Mật khẩu
                </label>
                <div class="wrap-input100 validate-input m-b-12" data-validate="password_confirmation  is required">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password_confirmation " id="password_confirmation ">
                    <span class="focus-input100"></span>
                </div>
                <div class="flex-sb-m w-full p-b-48">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Ghi nhớ đăng nhập
                        </label>
                    </div>
                    <div>
                        <a href="{{ route('login') }}" class="txt3">
                            Đã có tài khoản? Đăng nhập
                        </a>
                    </div>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Đăng kí
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection