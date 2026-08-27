<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_onboarding_records')) {
            Schema::create('customer_onboarding_records', function (Blueprint $table) {
                $table->id();
                $table->string('customer_name')->default('Apollo Healthcare Group');
                $table->string('onboarding_stage')->default('GUIDED_PRODUCT_SETUP_COMPLETE');
                $table->decimal('health_score', 5, 2)->default(99.60);
                $table->string('ai_assistant_status')->default('ACTIVE_247_GUIDANCE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_onboarding_records');
    }
};
