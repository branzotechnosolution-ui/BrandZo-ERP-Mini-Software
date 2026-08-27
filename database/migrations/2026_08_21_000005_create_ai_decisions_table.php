<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_decisions')) {
            Schema::create('ai_decisions', function (Blueprint $table) {
                $table->id();
                $table->string('decision_type');
                $table->text('recommendation');
                $table->string('confidence_score')->default('99.2%');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_decisions');
    }
};
