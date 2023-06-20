<?php

namespace App\Policies\Client\V1;

use App\Models\User;
use App\Models\V1\Transaction;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Transaction $transaction): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Transaction $transaction): bool
    {
    }

    public function delete(User $user, Transaction $transaction): bool
    {
    }

    public function restore(User $user, Transaction $transaction): bool
    {
    }

    public function forceDelete(User $user, Transaction $transaction): bool
    {
    }
}
