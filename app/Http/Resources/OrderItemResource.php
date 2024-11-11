<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'total_quantity' => $this->total_quantity,
            'order_id' => $this->order->id,
            'product' => [
                'id' => $this->product->id,
                'name' => $this->product->name,
            ],
            'price_tier' => [
                'id' => $this->priceTier->id,
                'level' => $this->priceTier->name,
            ],
            'status' => [
                'id' => $this->status->id,
                'name' => $this->status->name,
            ],
            'contributions' => $this->contributions->map(function ($contribution) {
                return [
                    'id' => $contribution->id,
                    'quantity' => $contribution->quantity,
                    'retailer' => [
                        'id' => $contribution->retailer->id,
                        'name' => $contribution->retailer->name,
                    ],
                ];
            }),
        ];
    }
}
