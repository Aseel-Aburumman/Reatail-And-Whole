<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderContributionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_item_id' => $this->orderItem->id,
            'quantity' => $this->quantity,
            'retailer' => [
                'id' => $this->retailer->id,
                'name' => $this->retailer->name,
            ],
        ];
    }
}
