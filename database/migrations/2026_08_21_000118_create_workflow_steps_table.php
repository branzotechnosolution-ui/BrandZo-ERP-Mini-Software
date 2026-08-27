<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('workflow_steps')) {
            Schema::create('workflow_steps', function (Blueprint $table) {
                $table->id();
                $table->string('workflow_id');
                $table->integer('step_order')->default(1);
                $table->string('action_type')->default('AI_DECISION_CHECKPOINT');
                $table->string('handler')->default('App\Services\BrandZoBusinessRulesEngineService');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_steps');
    }
};
