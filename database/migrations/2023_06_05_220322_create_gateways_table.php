<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('gateways', function (Blueprint $table) {
            $table->id();
            $table->string('payment_module_id', 15);
            $table->foreign('payment_module_id')->on('payment_modules')->references('id')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vendor_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->json('info');
            $table->string('title', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('authorized_domain', 255)->nullable();
            $table->boolean('is_active');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gateways');
    }
};
