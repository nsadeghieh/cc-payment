<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'gateway_id',
        'person_id',
        'reference_id',
        'reference_type',
        'status',
        'amount',
        'callback_url',
    ];
}
