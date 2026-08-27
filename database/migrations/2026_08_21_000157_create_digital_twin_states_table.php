<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('digital_twin_states')) {
            Schema::create('digital_twin_states', function (Blueprint $table) {
                $table->id();
                $table->string('version')->default('Digital Twin Universe 2.0 Realtime Replica');
                $table->decimal('health_score', 5, 2)->default(100.00);
                $table->integer('synced_modules_count')->default(15);
                $table->string('status')->default('100% Realtime Synchronized');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('digital_twin_states');
    }
};
