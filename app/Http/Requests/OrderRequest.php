<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'deadline' => ['required', 'date'],
            'store_id' => ['required', 'exists:stores,id', 'integer'],
            'initiator_retailer_id' => ['required', 'exists:users,id', 'integer'],
            'total_quantity' => ['required', 'integer', 'min:1'],
            'product_id' => ['required', 'exists:products,id'],
            'price_tier_id' => ['required', 'exists:price_tiers,id'],
            'status_id' => ['required', 'exists:statuses,id'],
        ];
    }
}
