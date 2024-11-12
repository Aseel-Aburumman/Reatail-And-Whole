<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceTierRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'quantity' => 'required|integer|min:1',
        ];
    }
}
