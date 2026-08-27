<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('lead_scores_v2')) {
            Schema::create('lead_scores_v2', function (Blueprint $table) {
                $table->id();
                $table->string('score_code')->default('LEAD-SCR-99420');
                $table->decimal('lead_temperature_score', 5, 2)->default(99.80);
                $table->decimal('conversion_probability', 5, 2)->default(94.20);
                $table->string('status')->default('LEAD_TEMPERATURE_HIGH');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_scores_v2');
    }
};
