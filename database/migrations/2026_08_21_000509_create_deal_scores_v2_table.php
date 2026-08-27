<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('deal_scores_v2')) {
            Schema::create('deal_scores_v2', function (Blueprint $table) {
                $table->id();
                $table->string('score_code')->default('DEAL-SCR-99420');
                $table->decimal('deal_close_probability_percent', 5, 2)->default(88.40);
                $table->string('status')->default('DEAL_SCORING_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('deal_scores_v2');
    }
};
