<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'bail|required|min:6',
            'password_confirmation' => 'bail|required|same:password',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
