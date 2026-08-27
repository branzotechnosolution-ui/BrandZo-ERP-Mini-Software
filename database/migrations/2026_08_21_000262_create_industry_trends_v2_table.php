<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('industry_trends_v2')) {
            Schema::create('industry_trends_v2', function (Blueprint $table) {
                $table->id();
                $table->string('trend_name')->default('Healthcare & Biotech Autonomous AI Workforce Surge');
                $table->decimal('prediction_accuracy_percent', 5, 2)->default(99.60);
                $table->integer('active_opportunities_count')->default(42);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('industry_trends_v2');
    }
};
