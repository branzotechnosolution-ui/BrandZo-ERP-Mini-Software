<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_processes_v2')) {
            Schema::create('business_processes_v2', function (Blueprint $table) {
                $table->id();
                $table->string('process_name')->default('Autonomous Invoice & Revenue Reconciliation');
                $table->string('department')->default('Finance & Global Accounting');
                $table->decimal('automation_level_percent', 5, 2)->default(99.98);
                $table->string('status')->default('OPTIMAL_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_processes_v2');
    }
};
