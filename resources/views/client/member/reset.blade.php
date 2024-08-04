<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" class="login100-form flex-sb flex-w" action="{{ route('getPassword') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <span class="login100-form-title p-b-32">
            Đặt lại mật khẩu
        </span>
        <label class="txt1 p-b-10" for="email">
            Email
        </label>
        <div class="wrap-input100 validate-input m-b-12" data-validate="email is required">
            <input class="input100" type="email" name="email" id="email" style="height: 55px; border:none">
            <span class="focus-input100"></span>
        </div>
        <label class="txt1 p-b-10" for="password">
            Mật khẩu mới
        </label>
        <div class="wrap-input100 validate-input m-b-12" data-validate="password is required">
            <input class="input100" type="password" name="password" id="password" style="height: 55px; border:none">
            <span class="focus-input100"></span>
        </div>
        <label class="txt1 p-b-10" for="password_confirmation">
            Xác nhận mật khẩu
        </label>
        <div class="wrap-input100 validate-input m-b-12" data-validate="password confirmation is required">
            <input class="input100" type="password" name="password_confirmation" id="password_confirmation" style="height: 55px; border:none">
            <span class="focus-input100"></span>
        </div>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
                Đặt lại mật khẩu
            </button>
        </div>
    </form>
</body>

</html>