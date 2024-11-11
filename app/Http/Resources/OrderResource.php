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
        ];
    }
}
