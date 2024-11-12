<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
            ],
            'products' => $this->product->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                ];
            }),
            'orders' => $this->order->map(function ($order) {
                return [
                    'id' => $order->id,
                    'deadline' => $order->deadline,
                ];
            }),
        ];
    }
}
