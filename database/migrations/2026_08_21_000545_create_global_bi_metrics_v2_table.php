<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_bi_metrics_v2')) {
            Schema::create('global_bi_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('bi_code')->default('GBI-MTR-99420');
                $table->decimal('enterprise_arr_usd', 12, 2)->default(142800000.00);
                $table->string('status')->default('GLOBAL_BUSINESS_INTELLIGENCE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_bi_metrics_v2');
    }
};
