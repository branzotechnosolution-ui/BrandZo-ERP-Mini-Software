<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('api_usage_logs')) {
            Schema::create('api_usage_logs', function (Blueprint $table) {
                $table->id();
                $table->string('endpoint')->default('/api/v1/global-os/status');
                $table->integer('status_code')->default(200);
                $table->decimal('latency_ms', 8, 2)->default(1.42);
                $table->string('client_ip')->default('127.0.0.1');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('api_usage_logs');
    }
};
