<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('executive_reports')) {
            Schema::create('executive_reports', function (Blueprint $table) {
                $table->id();
                $table->string('report_type')->default('Daily CEO Briefing');
                $table->text('summary')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('executive_reports');
    }
};
