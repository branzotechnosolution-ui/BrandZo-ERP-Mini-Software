<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('lead_generation_logs_v2')) {
            Schema::create('lead_generation_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('lead_code')->default('LED-GEN-99420');
                $table->integer('daily_ai_mined_leads')->default(1840);
                $table->string('status')->default('LEAD_GENERATION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_generation_logs_v2');
    }
};
