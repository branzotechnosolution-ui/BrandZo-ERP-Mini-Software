<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('mobile_usage_metrics_v2')) {
            Schema::create('mobile_usage_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_code')->default('MOB-USG-99420');
                $table->decimal('mobile_app_health_score', 5, 2)->default(99.99);
                $table->decimal('user_engagement_score', 5, 2)->default(99.80);
                $table->string('status')->default('MOBILE_SUPER_APP_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_usage_metrics_v2');
    }
};
