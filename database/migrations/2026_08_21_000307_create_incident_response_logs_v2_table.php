<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('incident_response_logs_v2')) {
            Schema::create('incident_response_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('response_code')->default('RESP-LOG-99420');
                $table->decimal('response_latency_seconds', 4, 2)->default(0.42);
                $table->string('mitigation_status')->default('AUTONOMOUSLY_MITIGATED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('incident_response_logs_v2');
    }
};
