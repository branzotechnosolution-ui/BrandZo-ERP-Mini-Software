<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('content_generation_logs_v2')) {
            Schema::create('content_generation_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('content_code')->default('CNT-AI-99420');
                $table->string('content_type')->default('MULTIMODAL_OMNICHANNEL_CAMPAIGN_COPY');
                $table->decimal('engagement_boost_percent', 5, 2)->default(98.40);
                $table->string('status')->default('GENERATED_AUTONOMOUSLY');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('content_generation_logs_v2');
    }
};
