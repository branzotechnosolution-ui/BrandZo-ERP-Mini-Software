<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('patent_filings_v2')) {
            Schema::create('patent_filings_v2', function (Blueprint $table) {
                $table->id();
                $table->string('patent_code')->default('PATENT-BZ-2026-9942');
                $table->string('title')->default('System and Method for Autonomous Enterprise AI Singularity Orchestration');
                $table->integer('patents_filed_count')->default(42);
                $table->string('ip_protection_status')->default('100% GRANTED_PROTECTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('patent_filings_v2');
    }
};
