<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('disaster_recovery_logs_v2')) {
            Schema::create('disaster_recovery_logs_v2', function (Blueprint $table) {
                $table->id();
                $table->string('dr_code')->default('DR-FAILOVER-99420');
                $table->string('rpo_rto')->default('RPO: 0s | RTO: 1.42s');
                $table->string('status')->default('DISASTER_RECOVERY_VERIFIED');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('disaster_recovery_logs_v2');
    }
};
