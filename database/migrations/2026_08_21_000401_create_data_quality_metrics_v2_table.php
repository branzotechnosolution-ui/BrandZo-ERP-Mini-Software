<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('data_quality_metrics_v2')) {
            Schema::create('data_quality_metrics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('quality_code')->default('QLTY-MET-99420');
                $table->decimal('data_quality_score', 5, 2)->default(99.98);
                $table->integer('duplicates_neutralized')->default(0);
                $table->string('status')->default('DATA_QUALITY_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('data_quality_metrics_v2');
    }
};
