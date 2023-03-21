<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CartProductUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'quantity'   => 'required|integer|min:1|max:5',
        ];
    }
}
