<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\LoginRequest;
use App\Http\Requests\Shop\RegisterRequest;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('shop.page.login');
    }

    public function register()
    {
        return view('shop.page.register');
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::guard('customer')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            return redirect('/');
        }

        return redirect()->back()->with('error-login','Bạn đăng nhập thất bại');
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('customer')->logout();

        return redirect()->route('get.login');
    }

    public function create(RegisterRequest $request): RedirectResponse
    {
        Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/dang-nhap')->with('success','Bạn đã đăng ký thành công');
    }
}
