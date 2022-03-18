<?php

namespace App\Http\Requests;

use App\Enums\ProductSizeType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'size' => ['required'],
            'sku' => 'required|unique:products,sku,' . $this->id,
            'price' => 'required|numeric',
            'sale'  => 'numeric',
            'number'  => 'numeric',
            'feature_image_before' => 'image',
            'feature_image_after' => 'image',
            'description' => 'nullable|string'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
