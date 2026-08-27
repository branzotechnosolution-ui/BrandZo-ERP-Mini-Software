<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('churn_predictions_v2')) {
            Schema::create('churn_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('churn_code')->default('CHN-PRD-99420');
                $table->decimal('annual_churn_rate_percent', 5, 2)->default(0.42);
                $table->string('status')->default('CHURN_PREVENTION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('churn_predictions_v2');
    }
};
