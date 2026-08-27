<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('competitor_intelligence_v2')) {
            Schema::create('competitor_intelligence_v2', function (Blueprint $table) {
                $table->id();
                $table->string('competitor_code')->default('COMP-INT-99420');
                $table->integer('tracked_competitors_count')->default(1420);
                $table->decimal('pricing_precision_percent', 5, 2)->default(99.98);
                $table->string('status')->default('COMPETITOR_INTELLIGENCE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('competitor_intelligence_v2');
    }
};
