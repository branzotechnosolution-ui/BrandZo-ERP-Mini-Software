<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ceo_decision_histories')) {
            Schema::create('ceo_decision_histories', function (Blueprint $table) {
                $table->id();
                $table->string('decision_code')->default('DEC-CEO-109-9942');
                $table->string('title')->default('Approve .2M M&A Acquisition of BioHealth AI');
                $table->decimal('confidence_score', 5, 2)->default(99.80);
                $table->string('governance_status')->default('EXECUTED_AND_LOGGED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ceo_decision_histories');
    }
};
