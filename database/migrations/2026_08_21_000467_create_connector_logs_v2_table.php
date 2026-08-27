<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('connector_logs_v2')) {
            Schema::create('connector_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('log_code')->default('LOG-CON-99420');
                $table->decimal('connector_health_score', 5, 2)->default(99.98);
                $table->string('status')->default('CONNECTOR_HEALTH_PEAK');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('connector_logs_v2');
    }
};
