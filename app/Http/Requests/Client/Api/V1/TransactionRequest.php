<?php

namespace App\Http\Requests\Client\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'vendor_id' => ['required'],
            'gateway_id' => ['required', 'integer'],
            'person_id' => ['required', 'integer'],
            'reference_id' => ['required', 'integer'],
            'reference_type' => ['required'],
            'amount' => ['required', 'decimal:12,0'],
            'callback_url' => ['required', 'url'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
