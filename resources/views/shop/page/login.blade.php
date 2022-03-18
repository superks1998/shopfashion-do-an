@extends('shop.layouts.master')
@section('content')
<div class="login">
    <div class="row">
        <div class="col l-6 m-12 c-12">
            <div class="login__title">
                <h1>
                    Đăng nhập
                </h1>
            </div>
        </div>
        <div class="col l-6 m-12 c-12">
            @if(Session::has('error-login'))
                <div class="alert alert-danger mt-3" role="alert">
                    {{ Session('error-login') }}
                </div>
            @endif
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session('success') }}
                    </div>
                @endif
            <form class="login__form" method="post" action="{{ route('post.login') }}">
                @csrf
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
                <button type="submit" class="login__form-btn button dark">Đăng nhập</button>
                <span>hoặc <a href="/dang-ky">Đăng ký</a></span>
            </form>
        </div>
    </div>
</div>
@endsection
