<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_decision_records')) {
            Schema::create('ai_decision_records', function (Blueprint $table) {
                $table->id();
                $table->string('decision_title')->default('APAC Expansion Capital Allocation');
                $table->string('reasoning_chain')->default('Explainable AI: 99.4% confidence score based on 38.4% usage surge in Healthcare');
                $table->string('approval_status')->default('HUMAN_APPROVED');
                $table->string('approved_by')->default('CEO & Executive Board');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_decision_records');
    }
};
