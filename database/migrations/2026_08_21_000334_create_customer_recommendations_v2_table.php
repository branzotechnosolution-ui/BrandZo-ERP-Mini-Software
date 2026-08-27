<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customer_recommendations_v2')) {
            Schema::create('customer_recommendations_v2', function (Blueprint $table) {
                $table->id();
                $table->string('recommendation_code')->default('RECOM-CUST-99420');
                $table->decimal('match_precision_percent', 5, 2)->default(99.80);
                $table->string('conversion_status')->default('RECOMMENDATION_CONVERTED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_recommendations_v2');
    }
};
