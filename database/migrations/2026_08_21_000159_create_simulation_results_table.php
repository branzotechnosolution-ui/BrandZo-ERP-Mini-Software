<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('simulation_results')) {
            Schema::create('simulation_results', function (Blueprint $table) {
                $table->id();
                $table->string('simulation_id')->default('SIM-99420');
                $table->text('outcome_summary')->default('Predicts +.4M ARR expansion with zero risk of operational bottlenecks.');
                $table->decimal('accuracy_percent', 5, 2)->default(99.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('simulation_results');
    }
};
