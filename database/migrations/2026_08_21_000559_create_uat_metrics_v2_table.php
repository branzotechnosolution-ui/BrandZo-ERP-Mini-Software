<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('uat_metrics_v2')) {
            Schema::create('uat_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('UAT-MTR-99420');
                $table->decimal('uat_pass_rate_percent', 5, 2)->default(100.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_UAT_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('uat_metrics_v2');
    }
};
