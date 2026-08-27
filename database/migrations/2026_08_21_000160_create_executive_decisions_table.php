<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('executive_decisions')) {
            Schema::create('executive_decisions', function (Blueprint $table) {
                $table->id();
                $table->string('decision_title')->default('AI CEO Advisory: Allocate .2M to APAC Sales Network');
                $table->string('recommended_by')->default('AI CEO & Executive Board Advisor');
                $table->string('approval_status')->default('HUMAN_APPROVED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('executive_decisions');
    }
};
