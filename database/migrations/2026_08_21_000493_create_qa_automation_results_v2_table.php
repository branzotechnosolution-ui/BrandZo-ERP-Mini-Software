<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('qa_automation_results_v2')) {
            Schema::create('qa_automation_results_v2', function (Blueprint $table) {
                $table->id();
                $table->string('qa_code')->default('QA-AUT-99420');
                $table->decimal('test_pass_rate_percent', 5, 2)->default(100.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_PRODUCTION_READY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('qa_automation_results_v2');
    }
};
