<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('autonomous_operations')) {
            Schema::create('autonomous_operations', function (Blueprint $table) {
                $table->id();
                $table->string('operation_name');
                $table->string('loop_phase')->default('Optimize');
                $table->string('status')->default('Autonomous Execution Completed');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('autonomous_operations');
    }
};
