<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('company_memories')) {
            Schema::create('company_memories', function (Blueprint $table) {
                $table->id();
                $table->string('memory_type');
                $table->text('lesson_learned');
                $table->string('impact_level')->default('High');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('company_memories');
    }
};
