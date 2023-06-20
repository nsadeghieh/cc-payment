<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gateway_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('person_id')->index();
            $table->unsignedBigInteger('reference_id');
            $table->string('reference_type');
            $table->integer('status')->default(0);
            $table->decimal('amount', 12, 0);
            $table->string('callback_url', 1023);
            $table->string('bank_payment_token');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
