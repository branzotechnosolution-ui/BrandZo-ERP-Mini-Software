<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('mobile_sessions_v2')) {
            Schema::create('mobile_sessions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('session_code')->default('SESS-MOB-99420');
                $table->string('sync_status')->default('OFFLINE_SYNC_OPTIMAL');
                $table->decimal('sync_latency_sec', 5, 2)->default(0.42);
                $table->string('status')->default('MOBILE_SESSION_ACTIVE');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_sessions_v2');
    }
};
