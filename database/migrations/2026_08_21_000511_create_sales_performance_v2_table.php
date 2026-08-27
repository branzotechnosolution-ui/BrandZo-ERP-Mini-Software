<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sales_performance_v2')) {
            Schema::create('sales_performance_v2', function (Blueprint $table) {
                $table->id();
                $table->string('performance_code')->default('SALES-PRF-99420');
                $table->decimal('sales_velocity_multiplier', 5, 2)->default(1.42);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_SALES_COPILOT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_performance_v2');
    }
};
