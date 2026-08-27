<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('contract_lifecycles_v2')) {
            Schema::create('contract_lifecycles_v2', function (Blueprint $table) {
                $table->id();
                $table->string('contract_code')->default('CTR-BZ-99420');
                $table->integer('active_contracts_count')->default(14200);
                $table->decimal('avg_risk_score', 3, 2)->default(0.02);
                $table->string('auto_clause_generation')->default('ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('contract_lifecycles_v2');
    }
};
