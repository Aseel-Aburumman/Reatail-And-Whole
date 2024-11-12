<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'deadline' => $this->deadline,
            'store' => [
                'id' => $this->store->id,
                'name' => $this->store->name,
            ],
            'initiator_retailer_id' => [
                'id' => $this->retailer->id,
                'name' => $this->retailer->name,
            ],

            'total_quantity' => $this->total_quantity,
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
