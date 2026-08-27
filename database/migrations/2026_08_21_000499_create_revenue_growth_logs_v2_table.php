<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('revenue_growth_logs_v2')) {
            Schema::create('revenue_growth_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('growth_code')->default('REV-GRW-99420');
                $table->decimal('monthly_recurring_growth_percent', 5, 2)->default(18.40);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_CUSTOMER_ACQUISITION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('revenue_growth_logs_v2');
    }
};
