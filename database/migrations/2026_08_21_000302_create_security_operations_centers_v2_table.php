<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('security_operations_centers_v2')) {
            Schema::create('security_operations_centers_v2', function (Blueprint $table) {
                $table->id();
                $table->string('soc_code')->default('SOC-AI-120-9942');
                $table->decimal('security_score', 5, 2)->default(99.80);
                $table->integer('threats_mitigated_24h')->default(1420);
                $table->string('status')->default('24_7_AUTONOMOUS_SOC_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('security_operations_centers_v2');
    }
};
