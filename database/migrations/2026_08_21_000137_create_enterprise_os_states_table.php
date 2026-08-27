<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('enterprise_os_states')) {
            Schema::create('enterprise_os_states', function (Blueprint $table) {
                $table->id();
                $table->string('version')->default('BrandZo Enterprise OS 100.0 Master Singularity');
                $table->decimal('health_score', 5, 2)->default(100.00);
                $table->decimal('mrr_inr', 12, 2)->default(18400000.00);
                $table->decimal('arr_inr', 12, 2)->default(220800000.00);
                $table->integer('active_ai_workforce')->default(520000);
                $table->string('status')->default('Master Singularity Active');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enterprise_os_states');
    }
};
