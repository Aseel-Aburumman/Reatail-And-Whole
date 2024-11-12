<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderContributionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'order_id' => ['required', 'exists:orders,id'],
            'retailer_id' => ['required', 'exists:users,id'],
            'quantity' => ['required', 'integer', 'min:1'],
        ];
    }
}
