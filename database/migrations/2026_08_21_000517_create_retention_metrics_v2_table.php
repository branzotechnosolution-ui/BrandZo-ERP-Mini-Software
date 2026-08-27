<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('retention_metrics_v2')) {
            Schema::create('retention_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('retention_code')->default('RTN-MTR-99420');
                $table->decimal('net_revenue_retention_percent', 5, 2)->default(142.80);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_CUSTOMER_SUCCESS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('retention_metrics_v2');
    }
};
