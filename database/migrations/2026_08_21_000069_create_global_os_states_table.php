<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('global_os_states')) {
            Schema::create('global_os_states', function (Blueprint $table) {
                $table->id();
                $table->string('os_version')->default('BrandZo OS 77.0');
                $table->string('status')->default('Master Singularity Active');
                $table->decimal('health_score', 5, 2)->default(100.00);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('global_os_states');
    }
};
