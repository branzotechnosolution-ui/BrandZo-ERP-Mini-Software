<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_onboarding_logs_v2')) {
            Schema::create('customer_onboarding_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('onboard_code')->default('ONB-LOG-2026-9942');
                $table->decimal('onboarding_time_sec', 5, 2)->default(2.40);
                $table->string('status')->default('ONBOARDING_AUTOMATION_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_onboarding_logs_v2');
    }
};
