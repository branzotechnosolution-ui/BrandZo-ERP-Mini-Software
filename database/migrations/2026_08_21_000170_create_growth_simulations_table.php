<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('growth_simulations')) {
            Schema::create('growth_simulations', function (Blueprint $table) {
                $table->id();
                $table->string('simulation_period')->default('3-Year Business Scaling Model');
                $table->decimal('projected_revenue_usd', 12, 2)->default(28400000.00);
                $table->integer('projected_ai_workforce')->default(520000);
                $table->decimal('confidence_score', 5, 2)->default(99.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('growth_simulations');
    }
};
