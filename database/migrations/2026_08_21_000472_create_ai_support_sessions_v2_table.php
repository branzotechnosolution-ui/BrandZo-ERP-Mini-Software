<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('ai_support_sessions_v2')) {
            Schema::create('ai_support_sessions_v2', function (Blueprint $table) {
                $table->id();
                $table->string('session_code')->default('SESS-SUP-99420');
                $table->integer('multichannel_sessions_count')->default(142500);
                $table->decimal('response_time_sec', 5, 2)->default(0.42);
                $table->string('status')->default('AI_SUPPORT_SESSION_OPTIMAL');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_support_sessions_v2');
    }
};
