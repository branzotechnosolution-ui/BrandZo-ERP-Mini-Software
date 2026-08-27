<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('company_blueprints')) {
            Schema::create('company_blueprints', function (Blueprint $table) {
                $table->id();
                $table->string('company_name')->default('MediAI Health Solutions Inc');
                $table->string('industry')->default('Healthcare Enterprise SaaS');
                $table->decimal('market_opportunity_usd', 12, 2)->default(48000000.00);
                $table->decimal('validation_score', 5, 2)->default(98.40);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('company_blueprints');
    }
};
