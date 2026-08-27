<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('seo_metrics_v2')) {
            Schema::create('seo_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('seo_code')->default('SEO-MET-99420');
                $table->decimal('seo_score', 5, 2)->default(99.80);
                $table->integer('indexed_keywords')->default(38400);
                $table->string('status')->default('SEO_INTELLIGENCE_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('seo_metrics_v2');
    }
};
