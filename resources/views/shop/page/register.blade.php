@extends('shop.layouts.master')
@section('content')
<div class="login">
    <div class="row">
        <div class="col l-6 m-12 c-12">
            <div class="login__title">
                <h1>
                    Đăng ký
                </h1>
            </div>
        </div>
        <div class="col l-6 m-12 c-12">
            <form class="login__form" method="post" action="{{ route('post.register') }}">
                @csrf
                <div class="login__form-input">
                    <input type="text" placeholder="Tên đăng nhập" name="name" class="@error('email') is-invalid @enderror">
                    @error('name')
                         <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="login__form-input">
                    <input type="text" placeholder="Email" name="email" class="@error('email') is-invalid @enderror">
                    @error('email')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="login__form-input">
                    <input type="password" placeholder="Mật khẩu" name="password" class="@error('password') is-invalid @enderror">
                    @error('password')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="login__form-input">
                    <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" class="@error('password_confirmation') is-invalid @enderror">
                    @error('password_confirmation')
                        <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="login__form-btn button dark">Đăng ký</button>
                <span>hoặc <a href="/dang-nhap">Đăng nhập</a></span>
            </form>
        </div>
    </div>
</div>
@endsection
