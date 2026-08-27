<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('project_risks_v2')) {
            Schema::create('project_risks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('risk_code')->default('RSK-PRJ-99420');
                $table->integer('risk_alerts_unmitigated')->default(0);
                $table->decimal('risk_score', 5, 2)->default(0.01);
                $table->string('status')->default('RISKS_MITIGATED_AUTONOMOUSLY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('project_risks_v2');
    }
};
