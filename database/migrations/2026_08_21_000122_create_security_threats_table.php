<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('security_threats')) {
            Schema::create('security_threats', function (Blueprint $table) {
                $table->id();
                $table->string('threat_name')->default('Distributed Anomaly Attack Vector');
                $table->string('threat_level')->default('CRITICAL_NEUTRALIZED');
                $table->integer('risk_score')->default(12);
                $table->string('source_ip')->default('192.168.1.100');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('security_threats');
    }
};
