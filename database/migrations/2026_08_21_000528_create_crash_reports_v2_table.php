<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('crash_reports_v2')) {
            Schema::create('crash_reports_v2', function (Blueprint $table) {
                $table->id();
                $table->string('crash_code')->default('CRS-RPT-2026-9942');
                $table->decimal('crash_free_users_percent', 5, 2)->default(99.98);
                $table->string('status')->default('CRASH_ANALYTICS_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('crash_reports_v2');
    }
};
