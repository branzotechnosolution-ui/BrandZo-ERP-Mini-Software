<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('simulations')) {
            Schema::create('simulations', function (Blueprint $table) {
                $table->id();
                $table->string('simulation_type');
                $table->string('horizon')->default('1Y');
                $table->decimal('predicted_revenue', 15, 2)->default(25000000.00);
                $table->decimal('predicted_profit', 15, 2)->default(8400000.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('simulations');
    }
};
