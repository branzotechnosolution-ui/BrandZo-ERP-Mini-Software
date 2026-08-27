<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('system_stability_logs_v2')) {
            Schema::create('system_stability_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('stability_code')->default('STB-LOG-2026-9942');
                $table->decimal('system_uptime_percent', 5, 2)->default(100.00);
                $table->string('status')->default('SYSTEM_STABILITY_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('system_stability_logs_v2');
    }
};
