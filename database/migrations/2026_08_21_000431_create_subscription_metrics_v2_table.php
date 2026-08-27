<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('subscription_metrics_v2')) {
            Schema::create('subscription_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('subscription_code')->default('SUB-ARR-99420');
                $table->string('arr_display')->default('₹22.08 Crores ARR');
                $table->decimal('nrr_percent', 5, 2)->default(138.40);
                $table->string('status')->default('SUBSCRIPTION_INTELLIGENCE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('subscription_metrics_v2');
    }
};
