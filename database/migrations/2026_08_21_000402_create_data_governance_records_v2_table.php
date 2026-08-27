<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('data_governance_records_v2')) {
            Schema::create('data_governance_records_v2', function (Blueprint $table) {
                $table->id();
                $table->string('governance_code')->default('GOV-REC-2026-9942');
                $table->decimal('governance_score', 5, 2)->default(100.00);
                $table->string('status')->default('GOVERNANCE_FULL_COMPLIANT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_governance_records_v2');
    }
};
