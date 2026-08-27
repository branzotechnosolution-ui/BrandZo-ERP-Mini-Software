<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('executive_suite_logs')) {
            Schema::create('executive_suite_logs', function (Blueprint $table) {
                $table->id();
                $table->string('executive_role')->default('AI COO');
                $table->string('action_taken');
                $table->decimal('efficiency_impact', 5, 2)->default(42.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('executive_suite_logs');
    }
};
