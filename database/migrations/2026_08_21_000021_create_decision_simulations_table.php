<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('decision_simulations')) {
            Schema::create('decision_simulations', function (Blueprint $table) {
                $table->id();
                $table->string('decision_name');
                $table->decimal('expected_roi', 5, 2)->default(38.40);
                $table->decimal('success_probability', 5, 2)->default(98.60);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('decision_simulations');
    }
};
