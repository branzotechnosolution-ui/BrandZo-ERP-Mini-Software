<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('executive_reports_v2')) {
            Schema::create('executive_reports_v2', function (Blueprint $table) {
                $table->id();
                $table->string('report_code')->default('RPT-EXEC-99420');
                $table->string('report_title')->default('Daily CEO & C-Suite Executive Intelligence Report');
                $table->integer('reports_generated_count')->default(18400);
                $table->string('status')->default('EXECUTIVE_REPORTS_AUTONOMOUS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('executive_reports_v2');
    }
};
