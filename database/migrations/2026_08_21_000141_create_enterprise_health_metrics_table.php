<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_health_metrics')) {
            Schema::create('enterprise_health_metrics', function (Blueprint $table) {
                $table->id();
                $table->decimal('overall_health', 5, 2)->default(100.00);
                $table->decimal('security_index', 5, 2)->default(99.80);
                $table->decimal('automation_efficiency', 5, 2)->default(99.98);
                $table->decimal('network_density', 5, 2)->default(99.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_health_metrics');
    }
};
