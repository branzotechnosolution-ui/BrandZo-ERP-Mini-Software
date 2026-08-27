<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('finance_intelligence_records')) {
            Schema::create('finance_intelligence_records', function (Blueprint $table) {
                $table->id();
                $table->string('metric_title')->default('AI CFO Cash Flow Runway');
                $table->integer('runway_months')->default(48);
                $table->decimal('profit_margin', 5, 2)->default(42.80);
                $table->string('risk_detection')->default('ZERO_RISK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('finance_intelligence_records');
    }
};
