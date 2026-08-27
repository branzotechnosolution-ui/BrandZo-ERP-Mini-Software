<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('operations_audit_logs')) {
            Schema::create('operations_audit_logs', function (Blueprint $table) {
                $table->id();
                $table->string('action_performed')->default('AI COO 2.0 Autonomous Optimization Executed');
                $table->string('executor_identity')->default('SYSTEM_AI_COO_ENGINE');
                $table->string('result')->default('SUCCESS');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('operations_audit_logs');
    }
};
