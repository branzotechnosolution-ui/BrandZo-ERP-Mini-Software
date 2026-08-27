<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('agent_memory')) {
            Schema::create('agent_memory', function (Blueprint $table) {
                $table->id();
                $table->string('agent_id');
                $table->text('memory_key');
                $table->text('memory_value')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_memory');
    }
};
