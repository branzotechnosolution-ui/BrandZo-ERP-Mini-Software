<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('commerce_analytics_v2')) {
            Schema::create('commerce_analytics_v2', function (Blueprint $table) {
                $table->id();
                $table->string('analytic_code')->default('COMM-MET-99420');
                $table->decimal('growth_index_score', 5, 2)->default(99.80);
                $table->string('status')->default('AI_GLOBAL_COMMERCE_MARKETPLACE_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('commerce_analytics_v2');
    }
};
