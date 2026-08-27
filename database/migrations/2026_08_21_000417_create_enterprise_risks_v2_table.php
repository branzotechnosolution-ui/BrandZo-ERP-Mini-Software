<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_risks_v2')) {
            Schema::create('enterprise_risks_v2', function (Blueprint $table) {
                $table->id();
                $table->string('risk_code')->default('RISK-ENT-99420');
                $table->decimal('risk_score', 5, 2)->default(0.01);
                $table->integer('policy_violations')->default(0);
                $table->string('status')->default('RISK_FULLY_MITIGATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_risks_v2');
    }
};
