<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('investor_relationships')) {
            Schema::create('investor_relationships', function (Blueprint $table) {
                $table->id();
                $table->string('investor_name')->default('Lead Partner - Growth Equity Fund');
                $table->string('interaction_type')->default('Executive Partner Pitch Meeting');
                $table->string('sentiment')->default('HIGHLY_BULLISH');
                $table->string('next_step')->default('Term Sheet Signoff');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('investor_relationships');
    }
};
