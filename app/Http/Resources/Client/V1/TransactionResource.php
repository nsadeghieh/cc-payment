<?php

namespace App\Http\Resources\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\V1\Transaction */
class TransactionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'gateway_id' => $this->gateway_id,
            'person_id' => $this->person_id,
            'reference_id' => $this->reference_id,
            'reference_type' => $this->reference_type,
            'status' => $this->status,
            'amount' => $this->amount,
            'callback_url' => $this->callback_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
