<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('partner_intelligence_logs')) {
            Schema::create('partner_intelligence_logs', function (Blueprint $table) {
                $table->id();
                $table->string('partner_id')->default('PARTNER-GLB-849');
                $table->string('territory')->default('North America & EU Central');
                $table->decimal('forecast_accuracy', 5, 2)->default(99.40);
                $table->decimal('monthly_revenue_usd', 12, 2)->default(1840000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('partner_intelligence_logs');
    }
};
