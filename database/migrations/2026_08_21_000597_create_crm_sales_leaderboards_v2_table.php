<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crm_sales_leaderboards_v2')) {
            Schema::create('crm_sales_leaderboards_v2', function (Blueprint $table) {
                $table->id();
                $table->string('leaderboard_code')->default('LDR-2026-9942');
                $table->string('employee_name')->default('Sales User (Ravi Kumar)');
                $table->integer('assigned_leads')->default(42);
                $table->integer('followups_completed')->default(38);
                $table->integer('deals_closed')->default(22);
                $table->decimal('revenue_generated', 15, 2)->default(1100000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crm_sales_leaderboards_v2');
    }
};
