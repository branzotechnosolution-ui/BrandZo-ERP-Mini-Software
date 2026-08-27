<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('bi_executive_reports')) {
            Schema::create('bi_executive_reports', function (Blueprint $table) {
                $table->id();
                $table->string('report_title')->default('CEO / CFO / COO Master BI Intelligence Summary');
                $table->string('executive_role')->default('CEO');
                $table->string('status')->default('Generated & Live');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('bi_executive_reports');
    }
};
