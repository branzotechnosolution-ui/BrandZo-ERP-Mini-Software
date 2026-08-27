<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('integration_logs')) {
            Schema::create('integration_logs', function (Blueprint $table) {
                $table->id();
                $table->string('integration_id');
                $table->string('event')->default('REALTIME_DATA_STREAM_MUTATED');
                $table->integer('response_code')->default(200);
                $table->decimal('latency_ms', 8, 2)->default(1.42);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('integration_logs');
    }
};
