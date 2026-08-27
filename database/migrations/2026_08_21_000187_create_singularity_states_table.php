<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('singularity_states')) {
            Schema::create('singularity_states', function (Blueprint $table) {
                $table->id();
                $table->string('version')->default('BrandZo Global Business Singularity OS v100.0 Master');
                $table->decimal('singularity_score', 5, 2)->default(100.00);
                $table->integer('phases_integrated')->default(100);
                $table->string('status')->default('MASTER_SINGULARITY_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('singularity_states');
    }
};
