<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('feature_requests_v2')) {
            Schema::create('feature_requests_v2', function (Blueprint $table) {
                $table->id();
                $table->string('feature_name')->default('AI SDR 3.0 Unlimited Enterprise Node Expansion');
                $table->decimal('utilization_rate_percent', 5, 2)->default(94.20);
                $table->string('priority')->default('AUTO_PRIORTIZED_P1');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('feature_requests_v2');
    }
};
