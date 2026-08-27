<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('nps_sentiment_logs_v2')) {
            Schema::create('nps_sentiment_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('nps_code')->default('NPS-LOG-99420');
                $table->integer('net_promoter_score')->default(78);
                $table->string('status')->default('NPS_SENTIMENT_EXCELLENT');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('nps_sentiment_logs_v2');
    }
};
