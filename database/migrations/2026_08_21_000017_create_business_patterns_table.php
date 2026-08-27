<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('business_patterns')) {
            Schema::create('business_patterns', function (Blueprint $table) {
                $table->id();
                $table->string('pattern_name');
                $table->string('category');
                $table->decimal('success_rate', 5, 2)->default(94.80);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('business_patterns');
    }
};
