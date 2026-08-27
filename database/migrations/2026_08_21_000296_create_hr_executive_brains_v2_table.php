<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('hr_executive_brains_v2')) {
            Schema::create('hr_executive_brains_v2', function (Blueprint $table) {
                $table->id();
                $table->string('brain_code')->default('HR-EXEC-119-9942');
                $table->bigInteger('total_workforce_managed')->default(520000);
                $table->decimal('precision_score_percent', 5, 2)->default(99.98);
                $table->string('status')->default('AI_HR_EXECUTIVE_BRAIN_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('hr_executive_brains_v2');
    }
};
