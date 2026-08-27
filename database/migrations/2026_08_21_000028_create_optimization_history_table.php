<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('optimization_history')) {
            Schema::create('optimization_history', function (Blueprint $table) {
                $table->id();
                $table->string('optimization_type');
                $table->decimal('cost_savings', 15, 2)->default(348000.00);
                $table->decimal('productivity_gain', 5, 2)->default(48.20);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('optimization_history');
    }
};
