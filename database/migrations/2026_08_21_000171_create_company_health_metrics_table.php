<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('company_health_metrics')) {
            Schema::create('company_health_metrics', function (Blueprint $table) {
                $table->id();
                $table->decimal('overall_health_score', 5, 2)->default(100.00);
                $table->decimal('operational_efficiency', 5, 2)->default(99.98);
                $table->integer('active_startups_count')->default(14);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('company_health_metrics');
    }
};
