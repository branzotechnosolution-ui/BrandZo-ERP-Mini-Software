<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('digital_twins')) {
            Schema::create('digital_twins', function (Blueprint $table) {
                $table->id();
                $table->string('name')->default('Enterprise Digital Replica');
                $table->decimal('health_score', 5, 2)->default(99.40);
                $table->json('replica_metrics')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('digital_twins');
    }
};
