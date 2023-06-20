<?php

namespace App\Http\Controllers\Client\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\Api\V1\TransactionRequest;
use App\Http\Resources\Client\V1\TransactionResource;
use App\Models\V1\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Transaction::class);

        return TransactionResource::collection(Transaction::all());
    }

    public function store(TransactionRequest $request)
    {
        $this->authorize('create', Transaction::class);

        return new TransactionResource(Transaction::create($request->validated()));
    }

    public function show(Transaction $transaction)
    {
        $this->authorize('view', $transaction);

        return new TransactionResource($transaction);
    }

    public function update(TransactionRequest $request, Transaction $transaction)
    {
        $this->authorize('update', $transaction);

        $transaction->update($request->validated());

        return new TransactionResource($transaction);
    }

    public function destroy(Transaction $transaction)
    {
        $this->authorize('delete', $transaction);

        $transaction->delete();

        return response()->json();
    }
}
