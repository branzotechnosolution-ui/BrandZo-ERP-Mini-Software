<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('decision_outcomes')) {
            Schema::create('decision_outcomes', function (Blueprint $table) {
                $table->id();
                $table->string('decision_title');
                $table->string('actual_outcome');
                $table->decimal('performance_delta', 5, 2)->default(28.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('decision_outcomes');
    }
};
