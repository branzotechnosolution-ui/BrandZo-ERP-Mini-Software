<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_singularity_states')) {
            Schema::create('enterprise_singularity_states', function (Blueprint $table) {
                $table->id();
                $table->string('system_state')->default('Level 10 Singularity Active');
                $table->decimal('intelligence_score', 5, 2)->default(100.00);
                $table->json('active_modules')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_singularity_states');
    }
};
