<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sla_metrics_v2')) {
            Schema::create('sla_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('sla_code')->default('SLA-SUP-99420');
                $table->decimal('sla_compliance_percent', 5, 2)->default(99.98);
                $table->string('status')->default('SLA_ENGINE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sla_metrics_v2');
    }
};
