<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('super_intelligence_states')) {
            Schema::create('super_intelligence_states', function (Blueprint $table) {
                $table->id();
                $table->string('singularity_level')->default('Level 58 Master Super Intelligence Active');
                $table->decimal('platform_health_score', 5, 2)->default(100.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('super_intelligence_states');
    }
};
