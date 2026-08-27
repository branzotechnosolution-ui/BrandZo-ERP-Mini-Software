<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_lead_imports_v2')) {
            Schema::create('crm_lead_imports_v2', function (Blueprint $table) {
                $table->id();
                $table->string('import_code')->unique()->default('IMP-2026-9942');
                $table->string('file_name')->default('enterprise_leads_q3_2026.csv');
                $table->string('uploaded_by')->default('Admin User');
                $table->integer('total_records')->default(500);
                $table->integer('success_count')->default(482);
                $table->integer('failed_count')->default(3);
                $table->integer('duplicate_count')->default(15);
                $table->string('duplicate_option')->default('Skip Duplicate'); // Skip Duplicate, Update Existing, Merge Data
                $table->string('auto_assigned_employee')->default('Senior Sales Team');
                $table->string('status')->default('COMPLETED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_lead_imports_v2');
    }
};
