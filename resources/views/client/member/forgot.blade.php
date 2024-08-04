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
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55" style="margin-top: -300px;">
            <form method="post" class="login100-form flex-sb flex-w" action="{{ route('forgotPassword') }}">
                @csrf
                <span class="login100-form-title p-b-32">
                    Lấy lại mất khẩu
                </span>
                <label class="txt1 p-b-10" for="email">
                    Email
                </label>
                <div class="wrap-input100 validate-input m-b-12" data-validate="email is required">
                    <input class="input100" type="email" name="email" id="email" style="height: 55px; border:none">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Gửi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection