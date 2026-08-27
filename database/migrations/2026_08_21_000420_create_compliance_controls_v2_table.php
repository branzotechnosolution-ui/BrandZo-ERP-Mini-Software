<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('compliance_controls_v2')) {
            Schema::create('compliance_controls_v2', function (Blueprint $table) {
                $table->id();
                $table->string('compliance_code')->default('COMP-CTRL-2026-9942');
                $table->decimal('compliance_percent', 5, 2)->default(100.00);
                $table->string('status')->default('COMPLIANCE_FULL_COMPLIANT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('compliance_controls_v2');
    }
};
