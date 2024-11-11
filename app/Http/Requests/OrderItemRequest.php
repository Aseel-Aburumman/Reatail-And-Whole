<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'total_quantity' => ['required', 'integer', 'min:1'],
            'order_id' => ['required', 'exists:orders,id'],
            'product_id' => ['required', 'exists:products,id'],
            'price_tier_id' => ['required', 'exists:price_tiers,id'],
            'status_id' => ['required', 'exists:statuses,id'],
        ];
    }
}
