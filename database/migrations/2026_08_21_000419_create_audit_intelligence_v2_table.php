<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('audit_intelligence_v2')) {
            Schema::create('audit_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('audit_code')->default('AUD-INT-99420');
                $table->decimal('audit_health_score', 5, 2)->default(99.98);
                $table->string('status')->default('AI_AUDIT_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_intelligence_v2');
    }
};
