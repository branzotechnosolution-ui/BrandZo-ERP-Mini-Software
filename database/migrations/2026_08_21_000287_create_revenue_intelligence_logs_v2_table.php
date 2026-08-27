<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('revenue_intelligence_logs_v2')) {
            Schema::create('revenue_intelligence_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('log_code')->default('REV-INTEL-99420');
                $table->decimal('net_revenue_retention_percent', 5, 2)->default(138.40);
                $table->string('predicted_arr_expansion')->default('+.4 Million USD');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('revenue_intelligence_logs_v2');
    }
};
