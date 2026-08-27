<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('production_readiness_v2')) {
            Schema::create('production_readiness_v2', function (Blueprint $table) {
                $table->id();
                $table->string('readiness_code')->default('PRD-RDN-99420');
                $table->decimal('readiness_score_percent', 5, 2)->default(100.00);
                $table->string('status')->default('BRANDZO_AI_ENTERPRISE_OS_PRODUCTION_READINESS_CERTIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('production_readiness_v2');
    }
};
