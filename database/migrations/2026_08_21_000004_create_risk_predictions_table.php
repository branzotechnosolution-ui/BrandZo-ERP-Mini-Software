<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('risk_predictions')) {
            Schema::create('risk_predictions', function (Blueprint $table) {
                $table->id();
                $table->string('category');
                $table->decimal('risk_score', 5, 2)->default(0.20);
                $table->text('prevention_recommendation')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('risk_predictions');
    }
};
