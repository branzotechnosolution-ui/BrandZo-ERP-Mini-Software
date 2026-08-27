<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sentiment_analysis_logs_v2')) {
            Schema::create('sentiment_analysis_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('sentiment_code')->default('SNT-CX-99420');
                $table->string('sentiment_verdict')->default('ULTRA_POSITIVE_DELIGHT');
                $table->decimal('confidence_score', 5, 2)->default(99.98);
                $table->string('status')->default('SENTIMENT_MONITORED_CONTINUOUSLY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('sentiment_analysis_logs_v2');
    }
};
