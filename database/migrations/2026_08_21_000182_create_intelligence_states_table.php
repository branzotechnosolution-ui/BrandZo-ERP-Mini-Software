<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('intelligence_states')) {
            Schema::create('intelligence_states', function (Blueprint $table) {
                $table->id();
                $table->string('version')->default('Universal AI Intelligence Core v99.0');
                $table->decimal('singularity_score', 5, 2)->default(100.00);
                $table->integer('orchestrated_agents_count')->default(520000);
                $table->string('status')->default('UNIVERSAL_INTELLIGENCE_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('intelligence_states');
    }
};
