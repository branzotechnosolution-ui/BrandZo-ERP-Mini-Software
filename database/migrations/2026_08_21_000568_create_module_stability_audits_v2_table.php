<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('module_stability_audits_v2')) {
            Schema::create('module_stability_audits_v2', function (Blueprint $table) {
                $table->id();
                $table->string('module_audit_code')->default('MOD-STB-99420');
                $table->string('tested_modules')->default('CRM, HRMS, Billing, AI Agent, Customer Portal');
                $table->string('status')->default('ALL_MODULES_STABLE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('module_stability_audits_v2');
    }
};
