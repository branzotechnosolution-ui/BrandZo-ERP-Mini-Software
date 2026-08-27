<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('local_validation_metrics_v2')) {
            Schema::create('local_validation_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('LOC-VLD-99420');
                $table->decimal('stability_score_percent', 5, 2)->default(100.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_REAL_ENVIRONMENT_VALIDATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('local_validation_metrics_v2');
    }
};
