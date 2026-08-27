<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('data_protection_metrics_v2')) {
            Schema::create('data_protection_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('protection_code')->default('PROT-MET-2026-9942');
                $table->string('encryption_standard')->default('AES-256 / Quantum-Resistant Cryptography');
                $table->decimal('data_protection_score', 5, 2)->default(100.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_protection_metrics_v2');
    }
};
