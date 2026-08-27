<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('growth_predictions_v2')) {
            Schema::create('growth_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('growth_code')->default('GRW-PRED-99420');
                $table->decimal('predicted_arr_usd', 12, 2)->default(48400000.00);
                $table->string('status')->default('AI_MARKETING_INTELLIGENCE_GROWTH_AUTOMATION_OS_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('growth_predictions_v2');
    }
};
