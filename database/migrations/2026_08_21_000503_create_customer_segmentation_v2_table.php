<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_segmentation_v2')) {
            Schema::create('customer_segmentation_v2', function (Blueprint $table) {
                $table->id();
                $table->string('segment_code')->default('SEG-AI-99420');
                $table->integer('micro_segment_clusters_count')->default(14);
                $table->string('status')->default('CUSTOMER_SEGMENTATION_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_segmentation_v2');
    }
};
