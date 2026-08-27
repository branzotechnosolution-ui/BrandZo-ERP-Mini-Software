<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('talent_intelligence_logs_v2')) {
            Schema::create('talent_intelligence_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('log_code')->default('TALENT-LOG-99420');
                $table->decimal('productivity_boost_percent', 5, 2)->default(42.80);
                $table->string('skill_matrix_status')->default('FULLY_OPTIMIZED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('talent_intelligence_logs_v2');
    }
};
