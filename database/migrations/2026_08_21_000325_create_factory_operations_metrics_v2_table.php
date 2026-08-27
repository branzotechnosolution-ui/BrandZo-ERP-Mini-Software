<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('factory_operations_metrics_v2')) {
            Schema::create('factory_operations_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('factory_code')->default('FACT-MET-99420');
                $table->decimal('factory_health_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_MANUFACTURING_INTELLIGENCE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('factory_operations_metrics_v2');
    }
};
