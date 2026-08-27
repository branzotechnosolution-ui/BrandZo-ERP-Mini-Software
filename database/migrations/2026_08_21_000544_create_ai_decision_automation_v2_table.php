<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_decision_automation_v2')) {
            Schema::create('ai_decision_automation_v2', function (Blueprint $table) {
                $table->id();
                $table->string('decision_code')->default('DEC-AUT-99420');
                $table->decimal('autonomous_decision_rate_percent', 5, 2)->default(99.98);
                $table->string('status')->default('AI_DECISION_AUTOMATION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_decision_automation_v2');
    }
};
