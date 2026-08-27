<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_execution_logs')) {
            Schema::create('ai_execution_logs', function (Blueprint $table) {
                $table->id();
                $table->string('action');
                $table->text('details')->nullable();
                $table->string('status')->default('Success');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_execution_logs');
    }
};
