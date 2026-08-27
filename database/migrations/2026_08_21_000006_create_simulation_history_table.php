<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('simulation_history')) {
            Schema::create('simulation_history', function (Blueprint $table) {
                $table->id();
                $table->string('run_by')->default('AI System');
                $table->json('parameters')->nullable();
                $table->json('result')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('simulation_history');
    }
};
