<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('market_revenue_metrics')) {
            Schema::create('market_revenue_metrics', function (Blueprint $table) {
                $table->id();
                $table->decimal('arr_crores', 12, 2)->default(22.08);
                $table->decimal('pipeline_arr_usd', 12, 2)->default(28400000.00);
                $table->decimal('ltv_cac_ratio', 5, 2)->default(36.90);
                $table->decimal('net_retention_rate', 5, 2)->default(138.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('market_revenue_metrics');
    }
};
