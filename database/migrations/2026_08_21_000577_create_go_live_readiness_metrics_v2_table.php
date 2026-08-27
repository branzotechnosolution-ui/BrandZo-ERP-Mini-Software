<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('go_live_readiness_metrics_v2')) {
            Schema::create('go_live_readiness_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('GOL-RDN-99420');
                $table->decimal('go_live_score_percent', 5, 2)->default(100.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_GO_LIVE_APPROVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('go_live_readiness_metrics_v2');
    }
};
