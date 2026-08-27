<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('webhooks_v2')) {
            Schema::create('webhooks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('webhook_code')->default('HOOK-INT-99420');
                $table->decimal('dispatch_latency_sec', 5, 2)->default(0.42);
                $table->string('status')->default('WEBHOOK_ENGINE_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('webhooks_v2');
    }
};
