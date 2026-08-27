<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('performance_predictions_v2')) {
            Schema::create('performance_predictions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('metric_predicted')->default('12-Month ARR Growth');
                $table->string('predicted_value')->default('+.4 Million ARR');
                $table->decimal('accuracy_score', 5, 2)->default(98.40);
                $table->string('horizon')->default('12_MONTHS_PREDICTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('performance_predictions_v2');
    }
};
