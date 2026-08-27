<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_financial_reports_v2')) {
            Schema::create('ai_financial_reports_v2', function (Blueprint $table) {
                $table->id();
                $table->string('report_code')->default('FIN-RPT-AI-99420');
                $table->string('report_type')->default('P&L, Balance Sheet, Cash Flow & GST Statement');
                $table->string('compliance_status')->default('100% GAAP & IFRS Compliant');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_financial_reports_v2');
    }
};
