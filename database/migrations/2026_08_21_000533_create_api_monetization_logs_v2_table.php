<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_monetization_logs_v2')) {
            Schema::create('api_monetization_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('monetization_code')->default('MNT-LOG-99420');
                $table->decimal('api_revenue_usd', 12, 2)->default(18400000.00);
                $table->string('status')->default('API_MONETIZATION_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_monetization_logs_v2');
    }
};
