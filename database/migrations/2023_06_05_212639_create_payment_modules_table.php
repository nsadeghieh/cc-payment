<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payment_modules', function (Blueprint $table) {
            $table->string('id', 15)->primary();
            $table->enum('purchase_type', ['cod', 'ipg', 'installment', 'credit', 'wallet']);
            $table->string('title', 255);
            $table->string('description', 255)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_modules');
    }
};
